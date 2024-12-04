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
        $data->name = $request->name;
        if ($request->hasFile('archivo')) {
            $data->url_logo = $this->FileUpload($request->file('archivo'));
        }
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->whatsapp = $request->whatsapp;
        $data->email = $request->email;
        $data->name_doctor = $request->name_doctor;
        $data->mcd = $request->mcd;
        if ($request->hasFile('url_signature')) {
            $data->url_signature = $this->FileUpload($request->file('url_signature'));
        }
        $data->mcd = $request->mcd;
        $data->save();
        return redirect()->route('settings.index')->with('success', 'Configuración actualizada');
    }


    private function FileUpload($file)
    {
        $uploadPath = public_path('/storage/settings/');
        $extension = $file->getClientOriginalExtension();
        $name = 'file-' . time();
        $filename = $name . '.' . $extension;
        $file->move($uploadPath, $filename);
        $path = '/storage/settings/' . $filename;

        return $path;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
