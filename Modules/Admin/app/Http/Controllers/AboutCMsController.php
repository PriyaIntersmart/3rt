<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\AboutCmsRequest;

class AboutCMsController extends Controller
{
        /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $about_cms=AboutUs::first();
        return view('admin::about-us-content.edit',compact('about_cms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutCmsRequest $request, $id)
    {

        $about_cms=AboutUs::find($id);

        $about_cms->title= $request->title;
        $about_cms->subtitle= $request->subtitle;
        $about_cms->description= $request->description;
        $about_cms->work_overview_title= $request->work_overview_title;
        $about_cms->work_overview_description= $request->work_overview_description;
        $about_cms->about_right_description= $request->about_right_description;
        $about_cms->about_left_description= $request->about_left_description;
        $about_cms->section_one_heading= $request->section_one_heading;
        $about_cms->section_two_heading=$request->section_two_heading;


        if ($request->has('about_image')) {
            $about_cms->deleteFile('about_image');
            $image = $about_cms->uploadFile($request->about_image, $about_cms->fileDirectory());
            $about_cms->about_image = $image;
        }
        if ($request->has('about_image_one')) {
            $about_cms->deleteFile('about_image_one');
            $image = $about_cms->uploadFile($request->about_image_one, $about_cms->fileDirectory());
            $about_cms->about_image_one = $image;
        }
        if ($request->has('about_image_two')) {
            $about_cms->deleteFile('about_image_two');
            $image = $about_cms->uploadFile($request->about_image_two, $about_cms->fileDirectory());
            $about_cms->about_image_two = $image;
        }
        if ($request->has('work_overview_imageone')) {
            $about_cms->deleteFile('work_overview_imageone');
            $image = $about_cms->uploadFile($request->work_overview_imageone, $about_cms->fileDirectory());
            $about_cms->work_overview_imageone = $image;
        }
        if ($request->has('work_overview_imagetwo')) {
            $about_cms->deleteFile('work_overview_imagetwo');
            $image = $about_cms->uploadFile($request->work_overview_imagetwo, $about_cms->fileDirectory());
            $about_cms->work_overview_imagetwo = $image;
        }
        if ($request->has('work_overview_imagethree')) {
            $about_cms->deleteFile('work_overview_imagethree');
            $image = $about_cms->uploadFile($request->work_overview_imagethree, $about_cms->fileDirectory());
            $about_cms->work_overview_imagethree = $image;
        }
        if ($request->has('work_overview_imagefour')) {
            $about_cms->deleteFile('work_overview_imagefour');
            $image = $about_cms->uploadFile($request->work_overview_imagefour, $about_cms->fileDirectory());
            $about_cms->work_overview_imagefour = $image;
        }



        if ($about_cms->save()) {

            return to_route('about-cms.edit')->with('success', ' About Cms updated successfully!');
        }

        return to_route('about-cms.edit')->with('error', 'Failed to create About Cms!');
    }
}
