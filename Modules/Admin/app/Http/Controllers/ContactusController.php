<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\ContactusRequest;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Contactus::all();
        return view('admin::contact-us.index',compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactusRequest $request)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;
        if ($teams = Contactus::create($data)) {

            return to_route('location.index')->with('success', 'Location  created successfully!');
        }

        return to_route('location.index')->with('error', 'Failed to create Location!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location=Contactus::find(base64_decode($id));
        return view('admin::contact-us.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactusRequest $request, Contactus $location)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
        $data['sort_order'] = 0;
        if ($location->fill($data)->save()) {


            return to_route('location.index')->with('success', 'location  updated successfully!');
        }

        return to_route('location.index')->with('error', 'Failed to update location !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Contactus $location)
    {
        if ($location->delete()) {
            return to_route('location.index')->with('success', 'item  deleted successfully!');
        }

        return to_route('location.index')->with('error', 'Failed to delete item !');
    }
}
