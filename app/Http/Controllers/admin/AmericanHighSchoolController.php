<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\American_High_School\AmericanHighSchoolCreateRequest;
use App\Http\Requests\admin\American_High_School\AmericanHighSchoolEditRequest;
use App\Models\American_High_School;
use Illuminate\Support\Facades\DB;

class AmericanHighSchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexamericanhighschool()
    {
        $american_high_school = American_High_School::all();
        return view('admin.american_high_school.american_high_school_index', compact('american_high_school'));
    }

    public function createamericanhighschoolget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.american_high_school.american_high_school_create',compact('country'));
    }

    public function createamericanhighschoolpost(AmericanHighSchoolCreateRequest $request)
    {
        $newamericanhighschool = new American_High_School();
        $newamericanhighschool->subjects_en = $request->input('subjects_en');
        $newamericanhighschool->subjects_ar = $request->input('subjects_ar');
        $newamericanhighschool->units_en = $request->input('units_en');
        $newamericanhighschool->units_ar = $request->input('units_ar');
        $newamericanhighschool->information_en = $request->input('information_en');
        $newamericanhighschool->information_ar = $request->input('information_ar');
        $newamericanhighschool->country_id = $request->input('country_id');
        $newamericanhighschool->order = $request->input('order');
        $newamericanhighschool->save();
        return redirect('/admin/american_high_school')->with('message', 'Add American High School Is Done!');
    }

    public function editamericanhighschoolget($id)
    {
        $american_high_school = American_High_School::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.american_high_school.american_high_school_edit', compact('american_high_school','country'));
    }

    public function editamericanhighschoolpost(AmericanHighSchoolEditRequest $request, $id)
    {
        $newamericanhighschool = American_High_School::find($id);
        $newamericanhighschool->subjects_en = $request->input('subjects_en');
        $newamericanhighschool->subjects_ar = $request->input('subjects_ar');
        $newamericanhighschool->units_en = $request->input('units_en');
        $newamericanhighschool->units_ar = $request->input('units_ar');
        $newamericanhighschool->information_en = $request->input('information_en');
        $newamericanhighschool->information_ar = $request->input('information_ar');
        $newamericanhighschool->country_id = $request->input('country_id');
        $newamericanhighschool->order = $request->input('order');
        $newamericanhighschool->save();
        return redirect('/admin/american_high_school')->with('message', 'Edit American High School Is Done!');
    }

    public function deleteamericanhighschool($id)
    {
        $american_high_school = American_High_School::find($id);
        $american_high_school->delete();
        return redirect()->back()->with('message', 'Delete American High School Is Done!');
    }
}

?>