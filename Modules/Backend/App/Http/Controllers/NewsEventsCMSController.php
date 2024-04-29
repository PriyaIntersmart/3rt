<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsEventsCms;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsEventsCMSController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $news_events_cms=NewsEventsCms::first();
        return view('backend::news-events-cms.edit', compact('news_events_cms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news_events_cms=NewsEventsCms::find($id);
        $news_events_cms->title=$request->title;
        $news_events_cms->description=$request->description;
        if ($news_events_cms->save()) {


            return to_route('news-events-cms.edit')->with('success', 'News And Events Cms  updated successfully!');
        }

        return to_route('news-events-cms.edit')->with('error', 'Failed to update News And Events Cms !');
    }

}
