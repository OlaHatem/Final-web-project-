<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('name','code')->get();
        $count = count($categories);
        return response([
            'status'=> 'success',
            'count' =>$count,
            'data' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

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

        $category = Category::create([
            'name' => $request -> name,
            'code' => $request -> code,

        ]);
        return response([
            'status' => 'product created successfuly',
            'product' => $category
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return response([
            'status' =>'success',
            'data' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',

        ];


        $messages = [
            'name.required' => 'The Category name field should be entered',
            'code.unique' => 'Category code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'status' => 'error',
                'errors' => $validator->errors()
            ]);
        }


        $category->name = $request -> name;
        $category->code = $request -> code;

        $category->save();


        return response([
            'status' => 'category updated successfuly',
            'product' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
