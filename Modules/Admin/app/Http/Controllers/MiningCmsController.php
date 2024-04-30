<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MiningCms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\MiningCmsRequest;

class MiningCmsController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $mining_cms=MiningCms::first();
        return view('admin::mining-cms.edit',compact('mining_cms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MiningCmsRequest $request, $id)
    {
        $mining_cms=MiningCms::find($id);
        $mining_cms->title=$request->title;
        $mining_cms->subtitle=$request->subtitle;
        if ($mining_cms->save()) {

            return to_route('mining_cms.edit')->with('success', ' Mining Cms updated successfully!');
        }

        return to_route('mining_cms.edit')->with('error', 'Failed to create Mining Cms!');
    }


}
