<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Requirement\RequirementCreateRequest;
use App\Http\Requests\admin\Requirement\RequirementEditRequest;
use App\Models\Requirement;
use Illuminate\Support\Facades\DB;

class RequirementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexrequirement()
    {
        $requirement = Requirement::with('country')->get();
        return view('admin.requirement.requirement_index', compact('requirement'));
    }

    public function createrequirementget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.requirement.requirement_create',compact('country'));
    }

    public function createrequirementpost(RequirementCreateRequest $request)
    {
        $newrequirement = new Requirement();
        $newrequirement->title_ar = $request->input('title_ar');
        $newrequirement->title_en = $request->input('title_en');
        $newrequirement->description_ar = $request->input('description_ar');
        $newrequirement->description_en = $request->input('description_en');
        $newrequirement->country_id = $request->input('country_id');
        $newrequirement->order = $request->input('order');
        $newrequirement->save();
        return redirect('/admin/requirement')->with('message', 'Add Requirement Is Done!');
    }

    public function editrequirementget($id)
    {
        $requirement = Requirement::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.requirement.requirement_edit', compact('requirement','country'));
    }

    public function editrequirementpost(RequirementEditRequest $request, $id)
    {
        $newrequirement = Requirement::find($id);
        $newrequirement->title_ar = $request->input('title_ar');
        $newrequirement->title_en = $request->input('title_en');
        $newrequirement->description_ar = $request->input('description_ar');
        $newrequirement->description_en = $request->input('description_en');
        $newrequirement->country_id = $request->input('country_id');
        $newrequirement->order = $request->input('order');
        $newrequirement->save();
        return redirect('/admin/requirement')->with('message', 'Edit Requirement Is Done!');
    }

    public function deleterequirement($id)
    {
        $requirement = Requirement::find($id);
        $requirement->delete();
        return redirect()->back()->with('message', 'Delete Requirement Is Done!');
    }
}

?>