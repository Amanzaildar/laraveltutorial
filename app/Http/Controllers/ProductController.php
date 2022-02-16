<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($request){
        $data = Product::where('id','=',$request)->get();
        return $data;
    }

    public function create(ProductRequest $request){
        $data = $request->all();
        $res = Product::insert($data);
        return $res;
    }
}
