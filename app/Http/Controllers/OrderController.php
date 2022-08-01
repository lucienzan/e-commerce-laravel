<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function destroy(Order $order)
    {
        $order->delete();
        return back();
    }

    public function userOrderDestroy(Order $order)
    {
        $order->delete();
        return back();
    }
}