<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\About_Us\AboutUsEditRequest;
use App\Models\AboutUs;
use App\Http\Requests\admin\About_Us\AboutUsCreateRequest;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexaboutus()
    {
        $aboutus = AboutUs::all();
        return view('admin.about_us.about_us_index', compact('aboutus'));
    }

    public function createaboutusget()
    {
        return view('admin.about_us.about_us_create');
    }

    public function createaboutuspost(AboutUsCreateRequest $request)
    {
        $aboutus = new AboutUs();
        $aboutus->description_ar = $request->input('description_ar');
        $aboutus->description_en = $request->input('description_en');
        $aboutus->save();
        return redirect('/admin/about_us')->with('message', 'Add About us Is Done!');
    }

    public function editaboutusget($id)
    {
        $aboutus = AboutUs::find($id);
        return view('admin.about_us.about_us_edit', compact('aboutus'));
    }

    public function editaboutuspost(AboutUsEditRequest $request, $id)
    {
        $aboutus = AboutUs::find($id);
        $aboutus->description_ar = $request->input('description_ar');
        $aboutus->description_en = $request->input('description_en');
            $aboutus->save();
            return redirect('/admin/about_us')->with('message', 'Edit Is Done!');

    }
}

?>