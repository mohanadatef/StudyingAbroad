<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Faq_Service\FaqServiceCreateRequest;
use App\Http\Requests\admin\Faq_Service\FaqServiceEditRequest;
use App\Models\Faq_Service;
use Illuminate\Support\Facades\DB;

class FaqServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexfaqservice()
    {
        $faq_service = Faq_Service::with('country','service')->get();
        return view('admin.faq_service.faq_service_index', compact('faq_service'));
    }

    public function createfaqserviceget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        $service = DB::table("services")->pluck("name_en", "id");
        return view('admin.faq_service.faq_service_create',compact('country','service'));
    }

    public function createfaqservicepost(FaqServiceCreateRequest $request)
    {
        $newfaqservice = new Faq_Service();
        $newfaqservice->question_ar = $request->input('question_ar');
        $newfaqservice->question_en = $request->input('question_en');
        $newfaqservice->answer_ar = $request->input('answer_ar');
        $newfaqservice->answer_en = $request->input('answer_en');
        $newfaqservice->service_id = $request->input('service_id');
        $newfaqservice->country_id = $request->input('country_id');
        $newfaqservice->order = $request->input('order');
        $newfaqservice->save();
        return redirect('/admin/faq_service')->with('message', 'Add Faq Service Is Done!');
    }

    public function editfaqserviceget($id)
    {
        $faq_service = Faq_Service::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        $service = DB::table("services")->pluck("name_en", "id");
        return view('admin.faq_service.faq_service_edit', compact('faq_service','country','service'));
    }

    public function editfaqservicepost(FaqServiceEditRequest $request, $id)
    {
        $newfaqservice = Faq_Service::find($id);
        $newfaqservice->question_ar = $request->input('question_ar');
        $newfaqservice->question_en = $request->input('question_en');
        $newfaqservice->answer_ar = $request->input('answer_ar');
        $newfaqservice->answer_en = $request->input('answer_en');
        $newfaqservice->service_id = $request->input('service_id');
        $newfaqservice->country_id = $request->input('country_id');
        $newfaqservice->order = $request->input('order');
        $newfaqservice->save();
        return redirect('/admin/faq_service')->with('message', 'Edit Faq Service Is Done!');
    }

    public function deletefaqservice($id)
    {
        $faq_service = Faq_Service::find($id);
        $faq_service->delete();
        return redirect()->back()->with('message', 'Delete Faq Service Is Done!');
    }
}

?>