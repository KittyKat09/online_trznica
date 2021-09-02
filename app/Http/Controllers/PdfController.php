<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;


class PdfController extends Controller
{
    public function create(Order $order)
    {
        $receiver = DB::table('orders')
            -> join ('users', 'users.id', '=', 'orders.user_id')
            -> where ('user_id', $order->user_id)
            ->first();

    	$data = [
            'name' => $receiver->name,
            'address' => $order->address,
            'postcode' => $order->postcode,
            'city' => $order->city,
            'content' => json_decode($order->content),
            'total' => $order->total
        ];
        $pdf = PDF::loadView('receipt', $data);

        return $pdf->download('Racun.pdf');
    }
}
