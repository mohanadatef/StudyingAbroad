<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Description_Service\DescriptionServiceCreateRequest;
use App\Http\Requests\admin\Description_Service\DescriptionServiceEditRequest;
use App\Models\Description_Service;
use Illuminate\Support\Facades\DB;

class DescriptionServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexdescriptionservice()
    {
        $description_service = Description_Service::with('country','service')->get();
        return view('admin.description_service.description_service_index', compact('description_service'));
    }

    public function createdescriptionserviceget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        $service = DB::table("services")->pluck("name_en", "id");
        return view('admin.description_service.description_service_create',compact('country','service'));
    }

    public function createdescriptionservicepost(DescriptionServiceCreateRequest $request)
    {
        $newdescriptionservice = new Description_Service();
        $newdescriptionservice->title_ar = $request->input('title_ar');
        $newdescriptionservice->title_en = $request->input('title_en');
        $newdescriptionservice->description_ar = $request->input('description_ar');
        $newdescriptionservice->description_en = $request->input('description_en');
        $newdescriptionservice->service_id = $request->input('service_id');
        $newdescriptionservice->country_id = $request->input('country_id');
        $newdescriptionservice->order = $request->input('order');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/description_service'), $imageName);
        $newdescriptionservice->image = ($imageName);
        $newdescriptionservice->save();
        return redirect('/admin/description_service')->with('message', 'Add Description Service Is Done!');
    }

    public function editdescriptionserviceget($id)
    {
        $description_service = Description_Service::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        $service = DB::table("services")->pluck("name_en", "id");
        return view('admin.description_service.description_service_edit', compact('description_service','country','service'));
    }

    public function editdescriptionservicepost(DescriptionServiceEditRequest $request, $id)
    {
        $newdescriptionservice = Description_Service::find($id);
        $newdescriptionservice->title_ar = $request->input('title_ar');
        $newdescriptionservice->title_en = $request->input('title_en');
        $newdescriptionservice->description_ar = $request->input('description_ar');
        $newdescriptionservice->description_en = $request->input('description_en');
        $newdescriptionservice->service_id = $request->input('service_id');
        $newdescriptionservice->country_id = $request->input('country_id');
        $newdescriptionservice->order = $request->input('order');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/description_service'), $imageName);
            $newdescriptionservice->image = ($imageName);
        }
            $newdescriptionservice->save();
            return redirect('/admin/description_service')->with('message', 'Edit Description Service Is Done!');

    }

    public function deletedescriptionservice($id)
    {
        $description_service = Description_Service::find($id);
        $description_service->delete();
        return redirect()->back()->with('message', 'Delete Description Service Is Done!');
    }
}

?>