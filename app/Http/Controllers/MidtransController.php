<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function checkout(Request $request)
    {
        // Proses pembayaran dan pembuatan transaksi menggunakan Midtrans API
        // ...

        // Contoh pembuatan transaksi dengan Midtrans Snap
        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-ID-' . time(),
                'gross_amount' => 100000,
            ],
            'credit_card' => [
                'secure' => true,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);
        return view('checkout', compact('snapToken'));
    }
}
