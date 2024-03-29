<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $orders = Order::with('product','user')->where("user_id", $user->id)->get();

        

        
        return view('shop.order', ['orders' => $orders]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->product_id =  $request->product_id;

        $order->amount = $request->amount;
        $order->user_id = $request->user()->id;



        $order->save();

        return redirect('/order');
    }

    public function decr($id, $amount)
    {
        if($amount > 0){
        Order::where('id', $id)
            ->update(['amount' => $amount - 1]);
        }
        //Session::flash('success', 'Order amount updated.');
        return redirect()->back();
    }

    public function incr($id, $amount)
    {
        if($amount < 5)
        Order::where('id', $id)
            ->update(['amount' => $amount + 1]);

        //Session::flash('success', 'Order amount updated.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($orderId)
    {
        $order = Order::find($orderId);

        $order->delete();

        return redirect('/order');
    }
}