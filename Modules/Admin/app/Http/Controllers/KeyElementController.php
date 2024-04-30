<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KeyElement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\KeyElementsRequest;

class KeyElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $key_elements=KeyElement::all();
        return view('admin::key-elements.index',compact('key_elements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::key-elements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KeyElementsRequest $request)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;
            if ($request->has('logo_image')) {
                $image = (new KeyElement())->uploadFile($request->logo_image, (new KeyElement())->fileDirectory());
                $data['logo_image'] = $image;
            }
        if ($teams = KeyElement::create($data)) {

            return to_route('key-element.index')->with('success', 'Key-Element  created successfully!');
        }

        return to_route('key-element.index')->with('error', 'Failed to create Key-Element !');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $key_element=KeyElement::find(base64_decode($id));
        return view('admin::key-elements.edit',compact('key_element'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KeyElementsRequest $request, KeyElement $key_element)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
        $data['sort_order'] = 0;
        if ($request->has('logo_image')) {
            $key_element->deleteFile('logo_image');
            $image = $key_element->uploadFile($request->logo_image, $key_element->fileDirectory());
            $data['logo_image'] = $image;
        }
        if ($key_element->fill($data)->save()) {


            return to_route('key-element.index')->with('success', 'Key-Element  updated successfully!');
        }

        return to_route('key-element.index')->with('error', 'Failed to update Key-Element !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( KeyElement $key_element)
    {
        if ($key_element->delete()) {
            return to_route('key-element.index')->with('success', 'Item  deleted successfully!');
        }

        return to_route('key-element.index')->with('error', 'Failed to delete item!');
    }
}
