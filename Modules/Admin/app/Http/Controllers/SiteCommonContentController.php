<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteCommonContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SiteCommonContentController extends Controller
{
    public function edit()
    {
        $site_common_content = SiteCommonContent::first();
        return view('admin::site-settings.edit', compact('site_common_content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $site_settings = SiteCommonContent::find($id);
        $site_settings->facebook_link = strip_tags($request->facebook_link);
        $site_settings->twitter_link = strip_tags($request->twitter_link);
        $site_settings->linkedin_link = strip_tags($request->linkedin_link);
        $site_settings->instagram_link = strip_tags($request->instagram_link);
        $site_settings->youtube_link = strip_tags($request->youtube_link);
        $site_settings->map_link = strip_tags($request->map_link);
        $site_settings->whatsapp_number = $request->whatsapp_number;
        $site_settings->email = $request->email;
        $site_settings->phone = $request->phone;
        $site_settings->address = $request->address;
        $site_settings->enquiry_receive_email = $request->enquiry_receive_email;
        if ($site_settings->save()) {
            return redirect()->back()->with('success', 'Site Common Settings Updated Successfully!');
        }
        return redirect()->back()->with('error', ' Failed to Update Site Common Settings');

    }


}
