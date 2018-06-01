<?php

namespace App\Http\Controllers;

use App\Product;
use App\Gambar;
use Illuminate\Http\Request;

use Storage;

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
        $gambar_list = Gambar::all();
        return view('ecom.index', ['product_list' => $product_list, 'gambar_list' => $gambar_list]);
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
            $gambarProduk = new Gambar;
            $gambar = $request->file('gambar');
            $gambarName = $gambar->getClientOriginalName();

            $destination_path = 'img/products';
            $upload_path = $destination_path. "/" . $gambarName;
            $gambar->move($destination_path, $gambarName);

            $gambarProduk->gambar = $upload_path;
            $product->gambar()->save($gambarProduk);

            //dd($upload_path);
        }

        if($product) {
            return redirect()->route('product.show', $product);
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

        $product = Product::find($product->idProduct);
        $gambar = Gambar::find($product->idProduct);
        return view('ecom.product.show', ['product' => $product, 'gambar' => $gambar]);
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
