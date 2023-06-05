<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Owner;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.showall', compact('product'));
    }

    public function create()
    {
        $category=Category::all();
        return view('product.create',compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);
        $product = Product::create($request->all());

        return view('product.show',compact('product'))->with('success');
    }

    public function addOwner($id){
        $product = Product::find($id);
        return view('product.addowner',compact('product'));

    }

    public function storeOwner(Request $request){
        $pro = Product::find($request->input('product_id'));
        $pro->owners()->attach($request->input('owner_id'));
        $product = Product::all();
        return view('product.showall',compact('product'));

    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $owner=Owner::all();
        return view('product.edit',compact('product','category','owner'));

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'owners_id'=>'required'
        ]);
        $product=Product::find($id);
        $product->name=$request['name'];
        $product->category_id=$request['category_id'];
        if($product!=null)
            $product->owners()->sync($request['owners_id']);
        $product->save();
        return redirect()->route('product.index',compact('product'));
    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();

        $product = Product::all();
        return redirect()->route('product.index',compact('product'));
    }
}
