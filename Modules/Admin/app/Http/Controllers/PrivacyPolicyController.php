<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $privacy_policy=PrivacyPolicy::first();
        return view('admin::privacy-policy.edit',compact('privacy_policy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $privacy_policy = PrivacyPolicy::find($id);

        $privacy_policy->description           = $request->description;
        if ($privacy_policy->save()) {
             return to_route('privacy-policy.edit')->with('success', 'Privacy policy  updated successfully!');
        }

        return to_route('privacy-policy.edit')->with('error', 'Failed to update Privacy policy!');
    }
}
