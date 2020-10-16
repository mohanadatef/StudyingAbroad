<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Setting\SettingCreateRequest;
use App\Http\Requests\admin\Setting\SettingEditRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexsetting()
    {
        $setting = Setting::all();
        return view('admin.setting.setting_index', compact('setting'));
    }

    public function createsettingget()
    {
        return view('admin.setting.setting_create');
    }

    public function createsettingpost(SettingCreateRequest $request)
    {
        $setting = new Setting();
        $setting->facebook = $request->input('facebook');
        $setting->youtube = $request->input('youtube');
        $setting->twitter = $request->input('twitter');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/setting'), $imageName);
        $setting->image = ($imageName);
        $logeName = time() . '-loge.' . Request()->loge->getClientOriginalExtension();
        Request()->loge->move(public_path('images/setting'), $logeName);
        $setting->loge = ($logeName);
        $setting->save();
        return redirect('/admin/setting')->with('message', 'Add Is Done!');
    }

    public function editsettingget($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.setting_edit', compact('setting'));
    }

    public function editsettingpost(SettingEditRequest $request, $id)
    {
        $setting = Setting::find($id);
        $setting->facebook = $request->input('facebook');
        $setting->youtube = $request->input('youtube');
        $setting->twitter = $request->input('twitter');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/setting'), $imageName);
            $setting->image = ($imageName);
        }
        if ($request->logo != null) {
        $logoName = time() . '-logo.' . Request()->logo->getClientOriginalExtension();
        Request()->logo->move(public_path('images/setting'), $logoName);
        $setting->logo = ($logoName);
        }
            $setting->save();
            return redirect('/admin/setting')->with('message', 'Edit Is Done!');

    }
}

?>