<?php

namespace App\Http\Controllers\Admin;
use App\model\BlogCat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCatController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:BlogCategories-create', ['only' => ['create','store']]);
        $this->middleware('permission:BlogCategories-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:BlogCategories-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $blogcategories = BlogCat::paginate(10);

        return view('backend.manage_blog.index',compact('blogcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.manage_blog.create');
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
            'title' => 'required',
            'meta_keywords' => 'required',
            'meta_descriptions' => 'required',

        ]);

        BlogCat::create($request->all());

        return redirect()->route('manage_blog.index')
                        ->with('success','Blog Categories created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
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
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
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

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}



