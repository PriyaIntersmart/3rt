<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Backend\Http\Requests\BannerRequest;

class HomeBannerController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $home_banner=HomeBanner::first();
        return view('backend::banner-management.edit',compact('home_banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, $id)
    {
        $home_banner = HomeBanner::find($id);

        $home_banner->title           = $request->title;
        $home_banner->subtitle           = $request->subtitle;
        $home_banner->button_title           = $request->button_title;
        if ($request->has('banner_image')) {
            $home_banner->deleteFile('banner_image');
            $image = $home_banner->uploadFile($request->banner_image, $home_banner->fileDirectory());
           $home_banner->banner_image = $image;
        }
        if ($home_banner->save()) {

            return to_route('home-banner.edit')->with('success', ' Banner updated successfully!');
        }

        return to_route('home-banner.edit')->with('error', 'Failed to create Banner!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
