<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\countSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count=countSetting::all();
        return view('admin::count-setting.index',compact('count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::count-setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;

        if ($teams = countSetting::create($data)) {

            return to_route('count-setting.index')->with('success', 'Item  created successfully!');
        }

        return to_route('count-setting.index')->with('error', 'Failed to create Item !');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $count_setting=countSetting::find(base64_decode($id));
        return view('admin::count-setting.edit',compact('count_setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $count_setting=countSetting::find(base64_decode($id));
        $count_setting->count= $request->count;
        $count_setting->subtitle=$request->subtitle;
        $count_setting->text_after_count=$request->text_after_count;
        $count_setting->text_before_count=$request->text_before_count;
        $count_setting->sort_order=$request->sort_order;
        $count_setting->status=$request->status;
        if ($count_setting->save()) {

            return to_route('count-setting.index')->with('success', 'Item  update successfully!');
        }

        return to_route('count-setting.index')->with('error', 'Failed to update Item !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $count_setting=countSetting::find($id);
        if ($count_setting->delete()) {
            return to_route('count-setting.index')->with('success', 'Item  deleted successfully!');
        }

        return to_route('count-setting.index')->with('error', 'Failed to delete Item !');
    }
}
