<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppSetting;
use App\Http\Controllers\services\Upload;
use Illuminate\Support\Facades\Storage;

class AppSettingsController extends Controller
{

    public function index()
    {
        return view('settings.app_settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'image|mimes:jpg,jpeg,png'
        ]);

        $setting = AppSetting::where('id', '=', 1)->first();

        if (request()->hasFile('logo')) {
            $extension = $request->logo->extension();
            $name = time();
            if ($setting->logo !== null) {
                Storage::delete($setting->logo);
            }
            $request->logo->storeAs('/public/logo', $name . "." . $extension);

            $url = Storage::url('public/logo/' . $name . "." . $extension);

            $setting->logo = $url;
        }

        $setting->update();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
