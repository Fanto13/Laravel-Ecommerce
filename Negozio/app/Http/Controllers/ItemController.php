<?php

namespace App\Http\Controllers;

use App\Item;
use Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Log\Logger;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    public function visualizzacategorie(Request $request)
    {

        $input = $request->all();
        $tipo = strtolower($input['categoria']);

        if ($tipo == 'tutto') {
            $items = Item::orderBy('category')->get();
        } else {
            $items = Item::where('category', $tipo)->get();
        }

        return view('item.categorie', compact('items'));
    }

    public function cercatitolodescrizione(Request $request)
    {
        //dd($request->all()['categoria']);
        $input = $request->all();
        $ricerca = strtolower($input['barra_ricerca']);
        $ricerca = '%' . $ricerca . '%';
        $items = Item::where('description', 'like', $ricerca)->orWhere('title', 'like', $ricerca)->get();

        return view('item.categorie', compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'price' => 'required',
            'n_warehouse' => 'required',
            'category' => 'required|max:255',
            'description' => 'required',
            'tmp_image' => 'required|image|mimes:jpeg,png,jpg,svg'
        ]);

        if ($validator->fails()) {
            return redirect('item/create')->withErrors($validator)->withInput();
        }

        $image = $request->file('tmp_image');
        $file_name = $image->getClientOriginalName();
        // $image_extension = $image->getClientOriginalExtension();
        $image_fullName = $file_name;    //."." .$image_extension;
        $destination_path = 'images/items/';

        $request['image'] = $destination_path . $image_fullName;

        $input = $request->all();
        $image->move($destination_path, $image_fullName);
        Item::create($input);

        return redirect()->action('ItemController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        echo $item->image;

        return view('item.edit', compact('item'));
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
        $input = $request->all();

        $item = Item::findOrFail($id);
        $item->title = $input["title"];
        $item->surname = $input["surname"];
        $item->email = $input["email"];
        $item->birth_date = $input["birth_date"];
        $item->sex = $input["sex"];
        $item->IsAdmin = $input["IsAdmin"];
        $item->save();

        $request->session()->flash('Profile Successfully Updated','Success');
        $item_id = $item->id;
        return redirect()->route('item.edit', $item_id);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $item = Item::find($id);
        $item->delete();
        return json_encode(['response' => 'Articolo cancellato correttamente!']);
    }
}
