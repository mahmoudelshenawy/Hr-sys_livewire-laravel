<?php

namespace App\Http\Controllers\HR\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administration;

class AdministrationsController extends Controller
{

    public function index()
    {
        $administrations = Administration::all();
        return view('hr.master.administrations.index', ['administrations' => $administrations]);
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
        Administration::create($request_all);
        session()->flash('success', 'new Administration is added');
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

        $administration = Administration::findOrFail($id);
        $request_all = $request->all();
        $administration->update($request_all);
        session()->flash('success', 'the administration is updated');
        return back();
    }
    public function destroy($id)
    {
        $Administration = Administration::findOrFail($id);
        $Administration->delete();
        session()->flash('success', 'Administration is deleted');
        return back();
    }
}
