<?php

namespace App\Http\Controllers;
use App\Order;
use App\Item;
use App\Basket;
use App\Purchase;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Log\Logger;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $item = Item::all();
        $basket = Basket::all();
        $user = User::all();
        $purchase = Purchase::all();
        //Log::info($tot);
        return view('order.index', compact('order','item','basket','user','purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request= $request->all();
       $neworder= new Order();

       $neworder->id=$request['id'];
       $neworder->user_id=$request['user_id'];
       $neworder->save();

       

       return view('order.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('order.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $order=Order::find($id);
     
        $order->created_at=date('m');
        $order->save();
      
        return view('order.update',compact('order'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
      
        return view('order.update', compact('order'));
    }
}
