<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\International_Baccalaureate\InternationalBaccalaureateEditRequest;
use App\Models\International_Baccalaureate;
use App\Http\Requests\admin\International_Baccalaureate\InternationalBaccalaureateCreateRequest;
use Illuminate\Support\Facades\DB;

class InternationalBaccalaureateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexinternationalbaccalaureate()
    {
        $international_baccalaureate = International_Baccalaureate::all();
        return view('admin.international_baccalaureate.international_baccalaureate_index', compact('international_baccalaureate'));
    }

    public function createinternationalbaccalaureateget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.international_baccalaureate.international_baccalaureate_create',compact('country'));
    }

    public function createinternationalbaccalaureatepost(InternationalBaccalaureateCreateRequest $request)
    {
        $newinternationalbaccalaureate = new International_Baccalaureate();
        $newinternationalbaccalaureate->description_ar = $request->input('description_ar');
        $newinternationalbaccalaureate->description_en = $request->input('description_en');
        $newinternationalbaccalaureate->country_id = $request->input('country_id');
        $newinternationalbaccalaureate->save();
        return redirect('/admin/international_baccalaureate')->with('message', 'Add International Baccalaureate Is Done!');
    }

    public function editinternationalbaccalaureateget($id)
    {
        $international_baccalaureate = International_Baccalaureate::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.international_baccalaureate.international_baccalaureate_edit', compact('international_baccalaureate','country'));
    }

    public function editinternationalbaccalaureatepost(InternationalBaccalaureateEditRequest $request, $id)
    {
        $internationalbaccalaureate = International_Baccalaureate::find($id);
        $internationalbaccalaureate->description_ar = $request->input('description_ar');
        $internationalbaccalaureate->description_en = $request->input('description_en');
        $internationalbaccalaureate->country_id = $request->input('country_id');
            $internationalbaccalaureate->save();
            return redirect('/admin/international_baccalaureate')->with('message', 'Edit International Baccalaureate Is Done!');
    }

    public function deleteinternationalbaccalaureate($id)
    {
        $international_baccalaureate = International_Baccalaureate::find($id);
        $international_baccalaureate->delete();
        return redirect()->back()->with('message', 'Delete International Baccalaureate Is Done!');
    }
}

?>