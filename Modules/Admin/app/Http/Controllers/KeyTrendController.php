<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KeyTrends;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\KeyTrendRequest;

class KeyTrendController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $key_element=KeyTrends::first();
        return view('admin::key-trends.edit',compact('key_element'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KeyTrendRequest $request, $id)
    {
        $key_element=KeyTrends::find($id);
        $key_element->title=$request->title;
        $key_element->percentage =$request->percentage;
        $key_element->starting_value=$request->starting_value;
        $key_element->starting_year=$request->starting_year;
        $key_element->description=$request->description;
        $key_element->ending_value=$request->ending_value;
        $key_element->ending_year=$request->ending_year;
        $key_element->heading=$request->heading;
        if ($key_element->save()) {
            return to_route('key-trends.edit')->with('success', 'Key Trends Content  updated successfully!');
       }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
