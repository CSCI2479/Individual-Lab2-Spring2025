<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Sample data: Array of customer orders
        $orders = [
            ['id' => 1, 'customer_name' => 'Alice', 'total' => 250.75],
            ['id' => 2, 'customer_name' => 'Bob', 'total' => 125.50],
            ['id' => 3, 'customer_name' => 'Charlie', 'total' => 300.00],
        ];
        // Return the 'orders' view with data
        return view('orders', ['orders' => $orders]);
    }
 
}
