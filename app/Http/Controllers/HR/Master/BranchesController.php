<?php

namespace App\Http\Controllers\HR\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;

class BranchesController extends Controller
{

    public function index()
    {
        $branches = Branch::all();
        return view('hr.master.branches.index', ['branches' => $branches]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'country' => 'required',
            'email' => 'nullable|email'
        ]);

        $request_all = $request->all();
        Branch::create($request_all);
        session()->flash('success', 'new branch is added');
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'nullable',
            'country' => 'required',
            'email' => 'nullable|email'
        ]);

        $branch = Branch::findOrFail($id);
        $request_all = $request->all();
        $branch->update($request_all);
        session()->flash('success', 'new branch is added');
        return back();
    }
    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();
        session()->flash('success', 'new branch is added');
        return back();
    }
}
