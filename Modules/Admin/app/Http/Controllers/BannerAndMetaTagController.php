<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BannerAndMetaTag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\BannerAndMetaRequest;
use Yajra\DataTables\DataTables;

class BannerAndMetaTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, )
    {

            $bannerandmeta = BannerAndMetaTag::all();

        return view('admin::banner-and-tags.index',compact('bannerandmeta'));
    }

    /**

     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bannerandmetatags = BannerAndMetaTag::find(base64_decode($id));

        return view('admin::banner-and-tags.edit',compact('bannerandmetatags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerAndMetaRequest $request, BannerAndMetaTag $bannerandmetatag)
    {

        $data = $request->all();

        if ($request->has('banner_image')) {
            $bannerandmetatag->deleteFile('banner_image');
            $image = $bannerandmetatag->uploadFile($request->banner_image, $bannerandmetatag->fileDirectory());
            $data['banner_image'] = $image;
        }


        if ($bannerandmetatag->fill($data)->save()) {

            return to_route('bannerandmetatag.index')->with('success', ' Banners and Meta Tag updated successfully!');
        }

        return to_route('bannerandmetatag.index')->with('error', 'Failed to create Banners and Meta Tag!');
    }


}
