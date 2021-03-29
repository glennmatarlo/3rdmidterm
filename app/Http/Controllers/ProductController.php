<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }



    public function store(Request $request)
    {
            return Product::create($request->all());
    }

    public function show($product)
    {
        return Product::find($product);
    }

    public function update(Request $request, $product)
    {
      $product = Product::find($product);
      $product->update($request->all());

      return $product;
    }

    public function destroy($product)
    {
        return Product::destroy($product);
    }

}
