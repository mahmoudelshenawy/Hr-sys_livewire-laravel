<?php

namespace App\Http\Controllers;

use App\Http\Livewire\MainOfficeSetting;
use Illuminate\Http\Request;
use App\Models\MainOfficeSettings;
use Illuminate\Support\Facades\Storage;

class MainOfficeSettingController extends Controller
{

    public function index()
    {
        $business_setup = null;
        // create for first or update 
        $business_setup = MainOfficeSettings::find(1);

        if ($business_setup == null) {

            $business_setup = new MainOfficeSettings();
        }

        // return redirect("/business_settings". '/' .$business_setup->id)->with('business_setup' , $business_setup);

        dd($business_setup->id);
        return redirect("/business_settings" . '/' . $business_setup->id);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $business_setup = MainOfficeSettings::find($id);
        return view('settings.main_office_settings', ['business_setup' => $business_setup]);
    }

    public function update(Request $request, $id)
    {
        $business_setup = MainOfficeSettings::find($id);
        // dd($business_setup);

        $request->validate([
            'name' => 'required',
            'email' => 'string|email',
            'phone' => 'string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'country' => 'string',
            'website' => 'nullable|string'
        ]);
        $request_all = request()->except(['logo']);
        $business_setup->update($request_all);
        if (request()->hasFile('logo')) {
            $extension = $request->logo->extension();
            $name = time();
            if ($business_setup->logo !== null) {
                Storage::delete($business_setup->logo);
            }
            $request->logo->storeAs('/public/logo', $name . "." . $extension);

            $url = Storage::url('public/logo/' . $name . "." . $extension);

            $business_setup->update(['logo' => $url]);
        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
