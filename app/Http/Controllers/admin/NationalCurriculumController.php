<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\National_Curriculum\NationalCurriculumCreateRequest;
use App\Http\Requests\admin\National_Curriculum\NationalCurriculumEditRequest;
use App\Models\National_Curriculum;
use Illuminate\Support\Facades\DB;

class NationalCurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexnationalcurriculum()
    {
        $national_curriculum = National_Curriculum::with('country')->get();
        return view('admin.national_curriculum.national_curriculum_index', compact('national_curriculum'));
    }

    public function createnationalcurriculumget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.national_curriculum.national_curriculum_create',compact('country'));
    }

    public function createnationalcurriculumpost(NationalCurriculumCreateRequest $request)
    {
        $newnationalcurriculum = new National_Curriculum();
        $newnationalcurriculum->country_name_en = $request->input('country_name_en');
        $newnationalcurriculum->country_name_ar = $request->input('country_name_ar');
        $newnationalcurriculum->result = $request->input('result');
        $newnationalcurriculum->section_en = $request->input('section_en');
        $newnationalcurriculum->section_ar = $request->input('section_ar');
        $newnationalcurriculum->country_id = $request->input('country_id');
        $newnationalcurriculum->order = $request->input('order');
        $newnationalcurriculum->save();
        return redirect('/admin/national_curriculum')->with('message', 'Add National Curriculum Is Done!');
    }

    public function editnationalcurriculumget($id)
    {
        $national_curriculum = National_Curriculum::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.national_curriculum.national_curriculum_edit', compact('national_curriculum','country'));
    }

    public function editnationalcurriculumpost(NationalCurriculumEditRequest $request, $id)
    {
        $newnationalcurriculum = National_Curriculum::find($id);
        $newnationalcurriculum->country_name_en = $request->input('country_name_en');
        $newnationalcurriculum->country_name_ar = $request->input('country_name_ar');
        $newnationalcurriculum->result = $request->input('result');
        $newnationalcurriculum->section_en = $request->input('section_en');
        $newnationalcurriculum->section_ar = $request->input('section_ar');
        $newnationalcurriculum->country_id = $request->input('country_id');
        $newnationalcurriculum->order = $request->input('order');
        $newnationalcurriculum->save();
        return redirect('/admin/national_curriculum')->with('message', 'Edit National Curriculum Is Done!');
    }

    public function deletenationalcurriculum($id)
    {
        $national_curriculum = National_Curriculum::find($id);
        $national_curriculum->delete();
        return redirect()->back()->with('message', 'Delete National Curriculum Is Done!');
    }
}

?>