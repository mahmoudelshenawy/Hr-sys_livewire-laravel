<?php

namespace App\Http\Controllers\HR\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{

    public function index()
    {
        $jobs = Job::all();
        return view('hr.master.jobs.index', ['jobs' => $jobs]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $request_all = $request->all();
        Job::create($request_all);
        session()->flash('success', 'new job is added');
        return back();
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $job = Job::findOrFail($id);
        $request_all = $request->all();
        $job->update($request_all);
        session()->flash('success', 'the job is updated');
        return back();
    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        session()->flash('success', 'job is deleted');
        return back();
    }
}
