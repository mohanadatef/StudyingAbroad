<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Home_Slider\HomeSliderCreateRequest;
use App\Http\Requests\admin\Home_Slider\HomeSliderEditRequest;
use App\Models\Home_Slider;

class HomeSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexhomeslider()
    {
        $homeslider = Home_Slider::orderby('order')->get();
        return view('admin.home_slider.home_slider_index', compact('homeslider'));
    }

    public function createhomesliderget()
    {
        return view('admin.home_slider.home_slider_create');
    }

    public function createhomesliderpost(HomeSliderCreateRequest $request)
    {
        $newhomeslider = new Home_Slider();
        $newhomeslider->description_ar = $request->input('description_ar');
        $newhomeslider->description_en = $request->input('description_en');
        $newhomeslider->title_ar = $request->input('title_ar');
        $newhomeslider->title_en = $request->input('title_en');
        $newhomeslider->order = $request->input('order');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/home_slider'), $imageName);
        $newhomeslider->image = ($imageName);
        $newhomeslider->save();
        return redirect('/admin/home_slider')->with('message', 'Add Home Slider Is Done!');
    }

    public function edithomesliderget($id)
    {
        $homeslider = Home_Slider::find($id);
        return view('admin.home_slider.home_slider_edit', compact('homeslider'));
    }

    public function edithomesliderpost(HomeSliderEditRequest $request, $id)
    {
        $newhomeslider = Home_Slider::find($id);
        $newhomeslider->description_ar = $request->input('description_ar');
        $newhomeslider->description_en = $request->input('description_en');
        $newhomeslider->title_ar = $request->input('title_ar');
        $newhomeslider->title_en = $request->input('title_en');
        $newhomeslider->order = $request->input('order');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/home_slider'), $imageName);
            $newhomeslider->image = ($imageName);
        }
            $newhomeslider->save();
            return redirect('/admin/home_slider')->with('message', 'Edit Home Slider Is Done!');

    }

    public function deletehomeslider($id)
    {
        $homeslider = Home_Slider::find($id);
        $homeslider->delete();
        return redirect()->back()->with('message', 'Delete Home Slider Is Done!');
    }
}

?>