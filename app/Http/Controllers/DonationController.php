<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    public function __construct()
    {
       \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
       \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
       \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
       \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function index() {
        $donations = Donation::orderBy('id', 'DESC')->paginate(5);

        return view('index', compact('donations'));
    }

    public function create() {
        return view('donation');
    }

    public function store(Request $request) {
        dd($request->idProduk);
        DB::transaction(function () use ($request) {
            // dd($request->idProduk);
            // dd($request->amount);
            $idProdukArray = explode(",", $request->idProduk);
            $qtyArray = explode(",", $request->grosir);
            /*$hargaArray = explode(",", $request->amount);*/
            $qtyvalue = 0;
            

            $id_user = Auth::id();
            foreach ($idProdukArray as $key => $idProdukValue) {
                $qty = isset($qtyArray[$key]) ? $qtyArray[$key] : $qtyvalue;
                /*$harga = isset($hargaArray[$key]) ? $hargaArray[$key] : $qtyvalue;*/
                $harga = $request->amount / $qty;

                $donation = Donation::create([
                    'order_id' => uniqid(),
                    'id_pelanggan' => $id_user,
                    'nama' => $request->name,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'kota' => $request->kota,
                    'noHp' => $request->noHp,
                    'id_produk' => $idProdukValue,
                    'kdPos' => $request->kdPos,
                    'amount' => $request->amount,
                    'qty' => $qty,
                ]);
            }

            // dd($donation);

            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->order_id,
                    'gross_amount'  => $harga,
                ],
                'item_details' => [
                    [
                        'id' => $donation->type,
                        'price' => $harga,
                        'quantity'  => $donation->qty,
                        'name'  => $donation->id_produk,
                        // 'name'  => ucwords(str_replace('_', ' ', $donation->type)),
                    ]
                ],
                'customer_details' => [
                    'first_name'    => $donation->nama,
                    'email'         => $donation->email,
                ],
            ];

            $snapToken = \Midtrans\Snap::getSnapToken($payload);

            $donation->snap_token = $snapToken;
            $donation->save();

            $this->response['snap_token'] = $snapToken;
        });

        // dd($this->response);
        return response()->json($this->response);
    }

    public function handleNotification(Request $request)
    {
        $signature = $request->header('signature'); // Assuming signature is in a header
    
        if (!$this->validateMidtransSignature($signature, $request->all())) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }
    
        try {
            $this->updateOrderStatus($request);
            
            return response()->json(['message' => 'Notification processed successfully']);
        } catch (\Exception $e) {
            // Handle error gracefully, log it, etc.
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
    
    private function validateMidtransSignature($signature, array $data)
    {
        // Implement your signature validation logic using Midtrans' documentation
        // and your server key
        return true; // Placeholder, replace with actual validation
    }
    
    private function updateOrderStatus(Request $request)
    {
        $transactionStatus = $request->input('transaction_status');
        $orderId = $request->input('order_id');
    
        $donation = Donation::where('order_id', $orderId)->first();
    
        if ($donation) {
            switch ($transactionStatus) {
                case 'capture':
                    if ($request->input('payment_type') === 'credit_card') {
                        if ($request->input('fraud_status') === 'challange') {
                            $donation->setStatusPending();
                        } else {
                            $donation->setStatusSuccess();
                        }
                    } else {
                        $donation->setStatusSuccess();
                    }
                    break;
                case 'settlement':
                    $donation->setStatusSuccess();
                    break;
                case 'pending':
                    $donation->setStatusPending();
                    break;
                case 'deny':
                    $donation->setStatusFailed();
                    break;
                case 'expire':
                    $donation->setStatusExpired();
                    break;
                case 'cancel':
                    $donation->setStatusFailed();
                    break;
            }
            $donation->save();
        }
    }
    
    private function performAdditionalActions(Request $request)
    {
        // Perform actions based on transaction status (e.g., send emails, update inventory)
    }

}