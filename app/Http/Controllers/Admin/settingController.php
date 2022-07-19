<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class settingController extends Controller
{

    public function index()
    {
        $sett=settings::all();
        return view('Admin.settings.index',compact('sett'));
    }

   
    public function edit($id)
    {
        $settings=settings::findorfail($id);
        return view('Admin.settings.edit',compact('settings'));


    }

    
    public function update(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'city'=>'nullable|string|max:50',
            'map'=>'required|url',
            'address'=>'required|string|max:50',
            'phone'=>'required|string',
            'twitter'=>'required|url',
            'face'=>'required|url',
            'insta'=>'required|url',
            
            'logo'=>'nullable|image|mimes:jpg,png,jpeg',
            'favicon'=>'nullable|image|mimes:jpg,png,jpeg',
           
        ]); 
        
        

        $old_name=settings::findorfail($request->id)->logo;
        if ($request->hasFile('logo')) {
            Storage::disk('uplouds')->delete('settings/' . $old_name );
            $new_name=$data['logo']->hashName();
            Image::make($data['logo'])->resize(165,47)->save(public_path('uplouds/settings/' . $new_name));
            $data['logo']=$new_name;

        } else {
            $data['logo']=$old_name;
        }


        $oldd_name=settings::findorfail($request->id)->favicon;
        if ($request->hasFile('favicon')) {
            Storage::disk('uplouds')->delete('settings/' . $old_name );
            $new_name=$data['favicon']->hashName();
            Image::make($data['favicon'])->resize(50,50)->save(public_path('uplouds/settings/' . $new_name));
            $data['favicon']=$new_name;

        } else {
            $data['favicon']=$oldd_name;
        }




        settings::findorfail($request->id)->update($data);
        return redirect(route('Admin.settings'));
    }

  
    public function delete($id)
    {
        $old_name=settings::findorfail($id)->logo;
        Storage::disk('uplouds')->delete('settings/' . $old_name );

        $oldd_name=settings::findorfail($id)->favicon;
        Storage::disk('uplouds')->delete('settings/' . $oldd_name );

        settings::findorfail($id)->delete();
        return redirect(route('Admin.settings'));
    }
}
