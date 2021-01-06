<?php

namespace App\Http\Controllers\HR\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('hr.master.departments.index', ['departments' => $departments]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'branch_id' => 'nullable|numeric',
        ]);

        $request_all = $request->all();
        Department::create($request_all);
        session()->flash('success', 'new Department is added');
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
            'branch_id' => 'nullable|numeric',
        ]);

        $Department = Department::findOrFail($id);
        $request_all = $request->all();
        $Department->update($request_all);
        session()->flash('success', 'the Department is updated');
        return back();
    }
    public function destroy($id)
    {
        $Department = Department::findOrFail($id);
        $Department->delete();
        session()->flash('success', 'Department is deleted');
        return back();
    }
}
