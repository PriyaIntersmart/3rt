<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TermsandCondition;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TermsAndConditionController extends Controller
{






    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $terms_and_condition=TermsandCondition::first();
        return view('backend::terms-and-condition.edit',compact('terms_and_condition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $terms_and_condition = TermsandCondition::find($id);
        $terms_and_condition->title           = strip_tags($request->title);
        $terms_and_condition->sub_title           = $request->sub_title;
        $terms_and_condition->description           = $request->description;
        if ($terms_and_condition->save()) {
             return to_route('terms-and-condition.edit')->with('success', 'Terms And Condition  updated successfully!');
        }

        return to_route('terms-and-condition.edit')->with('error', 'Failed to update Terms And Condition!');
    }


}
