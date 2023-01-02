<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Item;

use Validator;
use Illuminate\Http\Request;
use Auth;
use Log;
use Symfony\Component\HttpKernel\Log\Logger;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$orders = Order::all();
        $item = Item::all();
        $basket = Basket::all();
        $tot=0;
        foreach($basket as $bs){
            $items=Item::find($bs->item_id);
            $tot=$tot+($items->price)*$bs->quantity;
        }
        //Log::info($tot);
        return view('basket.index', compact('basket', 'tot','item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $basket = Basket::find($id);
        return view('basket.show', compact('basket'));
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
    public function update(Request $request, $id)
    {
        //
    }

    public function get(){
        $user_id=Auth::id();
        //select all from basket where user_id==user_id;, lo metto in un array e stampo
        $n_basket = Basket::where('user_id', $user_id)->get()->count();

        return $n_basket;

    }

    public function add(Request $request)
    {   
   
        $request['user_id'] = Auth::id();
        $input = $request->all();
       
        $item_id=$input["item_id"];
        $rigacarrello=Basket::create($input);
        // return redirect("home");
        return redirect()->action( 'ItemController@show', ['id' => $item_id])->with('message', "il prodotto è stato aggiunto al carrello");
        // return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tot=0;
        $basket=Basket::find($id);
        $basket->delete();
        $basket = Basket::all();
        foreach($basket as $bs){
            $items=Item::find($bs->item_id);
            $tot=$tot+($items->price)*$bs->quantity;
        }
        return view('basket.index', compact('basket', 'tot'));
        
    }
}
