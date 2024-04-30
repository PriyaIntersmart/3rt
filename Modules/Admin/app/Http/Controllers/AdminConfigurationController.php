<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminConfiguration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminConfigurationController extends Controller
{
    /* Display a listing of the resource.
    */
   public function index()
   {
       $configurations =AdminConfiguration::all();
       return view('admin::admin-config.index',compact('configurations'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return view('admin::create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       //
   }

   /**
    * Show the specified resource.
    */
   public function show($id)
   {
       return view('admin::show');
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit()
   {
       $configuration =AdminConfiguration::first();
       return view('admin::admin-config.edit',compact('configuration'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, $id)
   {
       $configuration = AdminConfiguration::find($id);
       $configuration->value           = $request->value;

       if ($configuration->save()) {
        return to_route('admin-config.index')->with('success', ' Admin configuration updated successfully!');
    }

    return to_route('admin-config.index')->with('error', 'Failed to create Admin configuration!');
   }


}
