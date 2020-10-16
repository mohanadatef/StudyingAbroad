<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Gce\GceEditRequest;
use App\Models\Gce;
use App\Http\Requests\admin\Gce\GceCreateRequest;
use Illuminate\Support\Facades\DB;

class GceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexgce()
    {
        $gce = Gce::all();
        return view('admin.gce.gce_index', compact('gce'));
    }

    public function creategceget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.gce.gce_create',compact('country'));
    }

    public function creategcepost(GceCreateRequest $request)
    {
        $newgce = new Gce();
        $newgce->description_ar = $request->input('description_ar');
        $newgce->description_en = $request->input('description_en');
        $newgce->country_id = $request->input('country_id');
        $newgce->save();
        return redirect('/admin/gce')->with('message', 'Add Gce Is Done!');
    }

    public function editgceget($id)
    {
        $gce = Gce::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.gce.gce_edit', compact('gce','country'));
    }

    public function editgcepost(GceEditRequest $request, $id)
    {
        $gce = Gce::find($id);
        $gce->description_ar = $request->input('description_ar');
        $gce->description_en = $request->input('description_en');
        $gce->country_id = $request->input('country_id');
            $gce->save();
            return redirect('/admin/gce')->with('message', 'Edit Gec Is Done!');
    }

    public function deletegce($id)
    {
        $gce = Gce::find($id);
        $gce->delete();
        return redirect()->back()->with('message', 'Delete Gce Is Done!');
    }
}

?>