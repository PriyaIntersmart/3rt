<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsEvents;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_events=NewsEvents::orderBy("created_at","desc")->simplePaginate(8);
        return view('admin::news-events.index',compact('news_events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::news-events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->has('image')) {
            $image = (new NewsEvents())->uploadFile($request->image, (new NewsEvents())->fileDirectory());
            $data['image'] = $image;
        }

        if ( NewsEvents::create($data)) {

            return to_route('news-events.index')->with('success', 'Item  created successfully!');
        }

        return to_route('news-events.index')->with('error', 'Failed to create Item!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news_events=NewsEvents::find(base64_decode($id));
        return view('admin::news-events.edit',compact('news_events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news_events=NewsEvents::find(base64_decode($id));
        $news_events->title=$request->title;
        $news_events->description=$request->description;
        $news_events->date=$request->date;
        if ($request->has('image')) {
            $news_events->deleteFile('image');
            $image = $news_events->uploadFile($request->image, $news_events->fileDirectory());
            $news_events->image=$image;
        }
        if ($news_events->save()) {


            return to_route('news-events.index')->with('success', 'Item  updated successfully!');
        }

        return to_route('news-events.index')->with('error', 'Failed to update Item !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( NewsEvents $news_events)
    {

        if ($news_events->delete()) {
            return to_route('news-events.index')->with('success', 'Item  deleted successfully!');
        }

        return to_route('news-events.index')->with('error', 'Failed to delete item!');
    }
}
