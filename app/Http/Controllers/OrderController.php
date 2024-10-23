<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $data = Item::join('orders', 'items.id', '=', 'orders.item_id')
        ->select('items.item_name','items.price','orders.id')
        ->where('orders.account_id',$id)
        ->get();
        $total = Item::join('orders', 'items.id', '=', 'orders.item_id')
        ->select('items.item_name','items.price','items.id')
        ->where('orders.account_id',$id)
        ->sum('items.price');
        // dd($total);
        return view('orderIndex',compact('data','total'));
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
        $cart = new Order();
        $cart->account_id = $request->account_id;
        $cart->item_id = $request->item_id;
        $cart->save();

        return redirect(route('index.order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::where('id',$id)->first();
        // dd($order);
        $order->delete();

        return redirect(route('index.order'));
    }

    public function submit(){
        $order = Order::truncate();

        return view('success');
    }
}
