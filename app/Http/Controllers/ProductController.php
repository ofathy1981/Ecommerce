<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;//handle requests fro user to contrller

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $product=Product::all();
        $product=Product::latest()->paginate(4);
        return view('product.index',compact('product'));
    }


    public function trash()
    {
        //
       // $product=Product::all();
        $product=Product::withTrashed()->latest()->paginate(4);
        return view('product.trash',compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create')->with('success','Created Succssefuly');
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
        $request->validate([
            'name'=>'required'
            ] );
        $product=Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'name'=>'required'
            ] );
        $product->update($request->all());
        return redirect()->route('product.index')
        ->with('success','update success');
    }

    /**
     * Remove the spec ified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index');
    }

    public function softdelete( $id)
    {
        //
        $product=Product::find($id)->delete();
        return redirect()->route('product.index');
    }


    public function unsoftdelete( $id)
    {
        //
        $product=Product::onlyTrashed()->where('id',$id)->first()->restore();
        return redirect()->route('product.index');
    }

    public function deletetrashed( $id)
    {
        //
        $product=Product::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('product.trash');
    }
}
