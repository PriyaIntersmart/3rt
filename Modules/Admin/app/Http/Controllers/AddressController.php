<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address=Address::all();
        return view('admin::address-managment.index',compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::address-managment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;

        if ($teams = Address::create($data)) {

            return to_route('address-management.index')->with('success', 'address created successfully!');
        }

        return to_route('address-management.index')->with('error', 'Failed to create address !');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $address=Address::find(base64_decode($id));
        return view('admin::address-managment.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $address=Address::find(base64_decode($id));

       $address->title=$request->title;

       $address->address=$request->address;
       $address->status=$request->status;

       $address->sort_order=$request->sort_order;

       if (!$request->sort_order)
       $address->sort_order = 0;

       if ($address->save()) {


        return to_route('address-management.index')->with('success', 'Address  updated successfully!');
    }

    return to_route('address-management.index')->with('error', 'Failed to update Address !');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $address=Address::find($id);
        if ($address->delete()) {
            return to_route('address-management.index')->with('success', 'Address  deleted successfully!');
    }

    return to_route('address-management.index')->with('error', 'Failed to delete Address !');
}
}
