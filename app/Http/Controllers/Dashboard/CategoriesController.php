<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       // $categories = Category::all();
        //$categories = Category::orderBy('created_at','desc')->get();

        //برجع بس 10 اصناف
        $categories = Category::paginate(10);
        return view('dashboard.categories.index',compact('categories'));
        //return view('dashboard.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
        //بتعرض الفيو الي من خلال اضيف بيانات الصنف
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
            'code'=> 'required|unique:categories|integer'
        ]);

        /*$rules = [
            'name' => 'required|max:50',
            'code'=> 'required|unique:categories|integer',
        ];

        $messages = [
            'name.required' => 'The Product name field should be entered',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }*/


        $category = new Category();
        $category->name = $request->name;
        $category->code = $request ->code;
        $category->save();

        return redirect()->route('dashboard.categories.index')->with('success','Post creates successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // نوعها get تعديل صنف معين
       // $products = Category::all();
       // return view('dashboard.posts.edit',compact('category','products'));
        return view('dashboard.categories.edit',compact('category'));

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
         //put نوعها , تخزين البيانات الي تعدلت
        $category->name = $request->name;
        $category->code = $request ->code;
        $category->save();
        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //حذف , delete نوعها
        $category->delete();
        return redirect()->route('dashboard.categories.index');
    }
}
