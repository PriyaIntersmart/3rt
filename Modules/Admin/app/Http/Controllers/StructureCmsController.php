<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StructureCms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\StructureCmsRequest;

class StructureCmsController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $structure_cms = StructureCms::first();
        return view('admin::structure-overview-cms.edit', compact('structure_cms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StructureCmsRequest $request, $id)
    {

        $structure_cms = StructureCms::find($id);
        $structure_cms->left_section_title = $request->left_section_title;
        $structure_cms->right_section_title = $request->right_section_title;
        $structure_cms->left_section_content = $request->left_section_content;
        $structure_cms->right_section_title = $request->right_section_title;
        $structure_cms->right_section_content = $request->right_section_content;
        $structure_cms->section_one_heading = $request->section_one_heading;
        $structure_cms->section_two_heading = $request->section_two_heading;
        $structure_cms->section_one_subtitle_one = $request->section_one_subtitle_one;
        $structure_cms->section_one_subtitle_two = $request->section_one_subtitle_two;
        if ($request->has('left_section_image')) {
            $structure_cms->deleteFile('left_section_image');
            $image = $structure_cms->uploadFile($request->left_section_image, $structure_cms->fileDirectory());
            $data['left_section_image'] = $image;
        }
        if ($request->has('section_one_image')) {
            $structure_cms->deleteFile('section_one_image');
            $image = $structure_cms->uploadFile($request->section_one_image, $structure_cms->fileDirectory());
            $data['section_one_image'] = $image;
        }
        if ($request->has('section_two_image')) {
            $structure_cms->deleteFile('section_two_image');
            $image = $structure_cms->uploadFile($request->section_two_image, $structure_cms->fileDirectory());
            $data['section_two_image'] = $image;
        }
        if ($structure_cms->save()) {


            return to_route('structure-overview.edit')->with('success', 'Structure Cms  updated successfully!');
        }

        return to_route('structure-overview.edit')->with('error', 'Failed to update Structure Cms  !');

    }


}
