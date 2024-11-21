<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::first();
        return view('settings.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Setting::find($id);
        $path = '';
        if ($request->hasFile('archivo')) {
            $uploadPath = public_path('/storage/settings/');
            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $name = 'file-' . time();
            $filename = $name . '.' . $extension;
            $file->move($uploadPath, $filename);
            $path = '/storage/settings/'.$filename;
        }

        $data->name = $request->name;
        $data->url_logo = $path;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->whatsapp = $request->whatsapp;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('settings.index')->with('success', 'Configuración actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
