<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=TeamMember::all();
        return view('admin::team-members.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::team-members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $data = $request->all();

        if ($request->has('image')) {
            $image = (new TeamMember())->uploadFile($request->image, (new TeamMember())->fileDirectory());
            $data['image'] = $image;
        }
        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;
        if ($teams = TeamMember::create($data)) {

            return to_route('team-management.index')->with('success', 'Team  created successfully!');
        }

        return to_route('team-management.index')->with('error', 'Failed to create Team!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team=TeamMember::find(base64_decode($id));
        return view('admin::team-members.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, TeamMember $team_management)
    {
        $data = $request->all();

        if ($request->has('image')) {
            $team_management->deleteFile('image');
            $image = $team_management->uploadFile($request->image, $team_management->fileDirectory());
            $data['image'] = $image;
        }
        if (!$request->filled('sort_order'))
        $data['sort_order'] = 0;
        if ($team_management->fill($data)->save()) {


            return to_route('team-management.index')->with('success', 'Team  updated successfully!');
        }

        return to_route('team-management.index')->with('error', 'Failed to update Team!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( TeamMember $team_management)
    {
        if ($team_management->delete()) {
            return to_route('team-management.index')->with('success', 'Team deleted successfully!');
        }
        return to_route('team-management.index')->with('error', 'Failed to delete Team!');
    }
}
