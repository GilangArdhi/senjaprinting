<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::transaction(function () use ($request) {
            // dd($request->idProduk);
            // dd($request->amount);
            $id_user = Auth::id();
            $donation = Donation::create([
                'order_id'  => uniqid(),
                'id_pelanggan'  => $id_user,
                'nama'  => $request->name,
                'email' => $request->email,
                'alamat'  => $request->alamat,
                'kota'    => $request->kota,
                'noHp'  => $request->noHp,
                'id_produk'  => $request->idProduk,
                'kdPos'  => $request->kdPos,
                'amount' => $request->amount,
                'qty' => $request->qty,
            ]);

            // dd($donation);

            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->order_id,
                    'gross_amount'  => $donation->amount,
                ],
                'item_details' => [
                    [
                        'id' => $donation->type,
                        'price' => $donation->amount,
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

    public function notification() {
        $notif = new \Midtrans\Notification();

        DB::transaction(function () use ($notif) {
            $transactionStatus  = $notif->transaction_status;
            $paymentType        = $notif->payment_type;
            $orderId            = $notif->order_id;
            $fraudStatus        = $notif->fraud_status;
            $donation           = Donation::where('order_id', $orderId)->first();

            if ($transactionStatus == 'caputre') {
                if ($paymentType == 'credit_card') {
                    if ($fraudStatus == 'challange') {
                        $donation->setStatusPending();
                    } else {
                        $donation->setStatusSuccess();
                    }
                }
            } else if ($transactionStatus == 'settlement') {
                $donation->setStatusSuccess();
            } else if ($transactionStatus == 'pending') {
                $donation->setStatusPending();
            } else if ($transactionStatus == 'deny') {
                $donation->setStatusFailed();
            } else if ($transactionStatus == 'expire') {
                $donation->setStatusExpired();
            } else if ($transactionStatus == 'cancel') {
                $donation->setStatusFailed();
            }

        });
    }

}