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
    public function index(Request $request)
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
    public function update(Request $request, $id)
    {

        $banner_and_meta=BannerAndMetaTag::find($id);
        $banner_and_meta->page_title=$request->page_title;
        $banner_and_meta->meta_title=$request->meta_title;
        $banner_and_meta->meta_description=$request->meta_description;
        $banner_and_meta->meta_keywords=$request->meta_keywords;
        $banner_and_meta->other_meta_keywords=$request->other_meta_keywords;
        if ($request->has('banner_image')) {
            $banner_and_meta->deleteFile('banner_image');
            $image = $banner_and_meta->uploadFile($request->banner_image, $banner_and_meta->fileDirectory());
            $data['banner_image'] = $image;
        }
        if ($banner_and_meta->save()) {

            return to_route('bannerandmetatag.index')->with('success', ' Banners and Meta Tag updated successfully!');
        }

        return to_route('bannerandmetatag.index')->with('error', 'Failed to create Banners and Meta Tag!');
    }


}
