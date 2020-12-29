<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\Validation\Validator;
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
        //$categories = Category::all();
        //$products = Product::orderBy('created_at','desc')->paginate(10);
        //return view('dashboard.products.index',compact('products'));


       $products = Product::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create',compact('categories'));
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
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',
            'product_image'=>'required|mimes:jpeg,png,bmp,jbg'
        ]);

       /* $rules = [
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',
            'product_image'=>'required|mimes:jpeg,png,bmp,jbg'
        ];


        $messages = [
            'name.required' => 'The Product name field should be entered',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }*/

        $product = new Product();
        $product->name = $request->name;
        $product->code = $request ->code;
        $productImage = $request->file('product_image');
        $fileName = time().'.'.$productImage->extension();
        $productImage->move('products_images',$fileName);
        $product->feature_image = $fileName;
        $product->large_image = $fileName;
        $product->save();
        return redirect()->route('dashboard.products.index')->with('success','Post creates successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $products = Category::all();
        return view('dashboard.products.edit',compact('products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {


        $product->name = $request->name;
        $product->code = $request ->code;
        $product->save();
        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
