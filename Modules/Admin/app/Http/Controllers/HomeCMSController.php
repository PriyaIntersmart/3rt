<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeCms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\HomecmsRequest;

class HomeCMSController extends Controller
{
   public function edit(){
    $home_cms=HomeCms::first();
    return view('admin::home-cms.edit',compact('home_cms'));
   }

   public function update(HomecmsRequest $request,$id){
    $home_cms=HomeCms::find($id);
    $home_cms->section_one_title=$request->section_one_title;
    $home_cms->section_one_subtitle=$request->section_one_subtitle;
    $home_cms->section_one_description=$request->section_one_description;
    $home_cms->section_one_button_title=$request->section_one_button_title;

    $home_cms->section_two_title=$request->section_two_title;
    $home_cms->section_two_description=$request->section_two_description;

    $home_cms->section_two_button_title=$request->section_two_button_title;
    $home_cms->section_three_title=$request->section_three_title;
    $home_cms->section_three_description=$request->section_three_description;

    $home_cms->section_four_title=$request->section_four_title;
    $home_cms->section_four_description=$request->section_four_description;
    $home_cms->section_four_button_title=$request->section_four_button_title;

    if ($request->has('section_one_image')) {
        $home_cms->deleteFile('section_one_image');
        $image = $home_cms->uploadFile($request->section_one_image, $home_cms->fileDirectory());
       $home_cms->section_one_image = $image;
    }

    if ($request->has('section_two_imageone')) {
        $home_cms->deleteFile('section_two_imageone');
        $image = $home_cms->uploadFile($request->section_two_imageone, $home_cms->fileDirectory());
       $home_cms->section_two_imageone = $image;
    }
    if ($request->has('section_two_imagetwo')) {
        $home_cms->deleteFile('section_two_imagetwo');
        $image = $home_cms->uploadFile($request->section_two_imagetwo, $home_cms->fileDirectory());
       $home_cms->section_two_imagetwo = $image;
    }
    if ($request->has('section_two_imagethree')) {
        $home_cms->deleteFile('section_two_imagethree');
        $image = $home_cms->uploadFile($request->section_two_imagethree, $home_cms->fileDirectory());
       $home_cms->section_two_imagethree = $image;
    }
    if ($request->has('section_three_image')) {
        $home_cms->deleteFile('section_three_image');
        $image = $home_cms->uploadFile($request->section_three_image, $home_cms->fileDirectory());
       $home_cms->section_three_image = $image;
    }
    if ($home_cms->save()) {

        return to_route('home-cms.edit')->with('success', ' Home cms updated successfully!');
    }

    return to_route('home-cms.edit')->with('error', 'Failed to create Home cms!');
}
}
