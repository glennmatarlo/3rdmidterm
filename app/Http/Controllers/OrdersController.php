<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Product;

class OrdersController extends Controller
{
    public function index()
    {
        return Orders::all();
    }

    
    public function store(Request $request)
    {
        
            return Orders::create($request->all());
    }

    public function show($schedule)
    {
        return Orders::find($orders);
    }

    public function update(Request $request, $orders)
    {
      $orders = Orders::find($orders);
      $orders->update($request->all());

      return $orders;
    }

    public function destroy($orders)
    {
        return Orders::destroy($orders);
    }


}
