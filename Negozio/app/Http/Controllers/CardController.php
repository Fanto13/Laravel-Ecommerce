<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Purchase;
use App\Item;
use App\User;
use App\Basket;
use App\Order;
use Validator;
use Symfony\Component\HttpKernel\Log\Logger;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        return view('card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $x = Card::create($input);
        //creazione di un ordine
        // $user_id = User::where('user_id', $x->getUser()->id);
        // $order=Order::save($user_id);
        //aggiornamento purchase
        
        //  $y = Item::where('item_id', $x->getUser()->id);
        //  $y = Basket::where('quantity', $x->getUser()->quantity);
        //  $purchase=Purchase::save();
        return redirect("order.index");

        //return redirect()->action( 'ItemController@show', ['id' => $x->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $card = Card::find($id);
       // $html = view('card.show', compact('card'))->render();
        return view('card.ordineeffettuato');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
