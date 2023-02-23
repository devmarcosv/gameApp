<?php

namespace App\Infraestructure\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    //

    public function store(Request $request)
    {

      $input = $request->all();
      $order = Order::create($input);

     $sendMail = Mail::to('jon@snow.com')->queue(new OrderMail($order));

      return response()->json('ok fine');

    }
}
