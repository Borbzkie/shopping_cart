<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  response()->json([
                        'success' => true,
                        'data' => Item::all()
                ]);
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
                        'description' => 'required',
                        'price' => 'required'
                    ]);
        
        return  response()->json([
                    'success' => true,
                    'data' => Item::create($request->all())
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        return  response()->json([
                    'data' => Item::find($id)
                ]);
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
        $item = Item::find($id); // get the item 
          
        return  response()->json([
                    'success' =>  $item->update($request->all()) 
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
                    'success' => Item::destroy($id)
                ]);
    }

     /**
     * Search item name
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {   

       return response()->json([
                'success' => true,
                'data' => Item::where('description', 'like', '%'. $name . '%')->get()
            ]);
    }
}
