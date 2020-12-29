<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('name','code')->get();
        $count = count($products);
        return response([
            'status'=> 'success',
            'count' =>$count,
            'data' => $products
        ]);
    }

    /**


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',

        ];


        $messages = [
            'name.required' => 'The Product name field should be entered',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }

        $product = Product::create([
           'name' => $request -> name,
           'code' => $request -> code,

        ]);
        return response([
            'status' => 'product created successfuly',
            'product' => $product
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response([
            'status' =>'success',
            'data' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',

        ];


        $messages = [
            'name.required' => 'The Product name field should be entered',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }


            $product->name = $request -> name;
            $product->code = $request -> code;

            $product->save();


        return response([
            'status' => 'product updated successfuly',
            'product' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response([
            'status' => 'product deleted successfuly',
            'data' => $product
        ]);
    }
}
