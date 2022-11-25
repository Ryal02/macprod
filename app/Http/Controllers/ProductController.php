<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
         $products = Product::with(['brands' =>function($q){
            $q->select('id','name');
         }])->get();

         return view('Product.index',compact('products'));
    }
    public function indexApi()
    {
        $products = Product::with(['brands' =>function($q){
            $q->select('id','name');
         }])->get();
       return response()->json($products,200);
    }
    public function create()
    {
        $brands = Brand::all();
        
        return view('Product.add',compact('brands'));
    }

    public function store(Request $request)
    {
        $products = Product::create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $brands = Brand::all();
        return view('Product.edit',compact('products','brands'));
    }

    public function update(Request $request)
    {
        $products = Product::find($request->id);

        $products->update($request->all());
        return redirect()->back();
    }
}
