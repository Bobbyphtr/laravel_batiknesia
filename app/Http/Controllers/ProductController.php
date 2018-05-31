<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_list = Product::all();
        return view('ecom.index', ['product_list' => $product_list ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecom.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'namaProduk' => $request->input('namaProduct'),
            'dimensi' => $request->input('dimensi'),
            'deskripsi' => $request->input('deskripsi'),
            'jumlahLike' => '0',
            'stock' => $request->input('stock'),
            'idJenis' => '3',
            'harga' => $request->input('harga'),
        ]);

        if($request->hasFile('gambar')) {
            dd('Gambar Ada');
            $gambarProduk = new Gambar;
            $gambarName = $request->input('gambar')->getClientOriginalName();
            dd($gambarName);
            $upload_path = 'img.products';
        }

        if($product) {
            return redirect()->route('ecom.product.show', ['product' => $product->id]);
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
