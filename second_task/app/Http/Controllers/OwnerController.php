<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    public function index()
    {

        $owner = Owner::all();
        return view('owner.showall', compact('owner'));
    }


    public function create()
    {
        return view('owner.create');

    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $owner = Owner::create($request->all());

        return view('owner.show',compact('owner'))->with('success');
      }


      public function addProduct($id){
        $owner = Owner::find($id);
        return view('owner.addproduct',compact('owner'));

    }
    public function storeProduct(Request $request){
        $own = Owner::find($request->input('owner_id'));
        $own->products()->attach($request->input('product_id'));
        $owner = Owner::all();
        return view('owner.showall',compact('owner'));

    }

    public function show(Owner $owner)
    {
        //
    }


    public function edit(Owner $owner)
    {
        //
    }


    public function update(Request $request, Owner $owner)
    {
        //
    }


    public function destroy($id)
    {
        $ow = Owner::find($id);
        if ($ow) {
            $ow->delete();
        }
        // return redirect()->back()->with('success', 'Owner Deleted Successfully');
        $owner = Owner::all();
        return view('owner.showall', compact('owner'));
    }
}
