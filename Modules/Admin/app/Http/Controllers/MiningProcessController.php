<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Miningprocess;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Http\Requests\MiningProcessRequest;

class MiningProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$mining_process=Miningprocess::all();
        return view('admin::mining-process.index',compact('mining_process'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::mining-process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MiningProcessRequest $request)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
            $data['sort_order'] = 0;
        if ($teams = Miningprocess::create($data)) {

            return to_route('mining-process.index')->with('success', 'Item  created successfully!');
        }

        return to_route('mining-process.index')->with('error', 'Failed to create Item!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mining_process=Miningprocess::find(base64_decode($id));
        return view('admin::mining-process.edit',compact('mining_process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MiningProcessRequest $request, Miningprocess $mining_process)
    {
        $data = $request->all();


        if (!$request->filled('sort_order'))
        $data['sort_order'] = 0;
        if ($mining_process->fill($data)->save()) {


            return to_route('mining-process.index')->with('success', 'mining Process  updated successfully!');
        }

        return to_route('mining-process.index')->with('error', 'Failed to update mining Process !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Miningprocess $mining_process)
    {
        if ($mining_process->delete()) {
            return to_route('mining-process.index')->with('success', 'item  deleted successfully!');
        }

        return to_route('mining-process.index')->with('error', 'Failed to delete item !');
    }
}
