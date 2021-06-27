<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class UserOrderController extends Controller
{
    public function index()
    {
        // return Author::with('news')->get();
        $orders = Order::all();	
        return view('user/order', compact('orders'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('user/order', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100|email:rfc,dns',
            'description' => 'required|max:500',
            ]);

            $data =Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'category' => $request->category,
            'package' => $request->package,
            'description' => $request->description,
                ]);

            return redirect('desain/order')->with('status', 'Yeyy pesanan berhasil ! kami akan segera menghubungimu.');
           
    }
}
