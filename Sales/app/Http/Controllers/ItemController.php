<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Product;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$items = [
            ['name'=>'cooker','code'=>'001','type'=>'domestic'],
            ['name'=>'iron','code'=>'002','type'=>'domestic'],
            ['name'=>'steamer','code'=>'003','type'=>'domestic'],
            ['name'=>'fan','code'=>'004','type'=>'domestic'],
            ['name'=>'boiler','code'=>'005','type'=>'domestic']
        ];
        return view('item',['items'=>$items]);*/
        $data=Item::all(); //select * from items;
        return view('item.index')->with('items',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=Product::all();
        return view('item.create')->with('products',$product);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name'=>'required',
            'code'=>'required',
            'type'=>'required'
        ]);
        //Add data to table items in database
        Item::create($request->all());//insert into items
        //Show index page after adding data
        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.view',['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit',['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Item $item)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'type'=>'required'
        ]);
        $item->update($request->all());
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
