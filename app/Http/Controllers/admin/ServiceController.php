<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Service\ServiceCreateRequest;
use App\Http\Requests\admin\Service\ServiceEditRequest;
use App\Models\Description_Service;
use App\Models\Faq_Service;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexservice()
    {
        $service = Service::orderby('order')->get();
        return view('admin.service.service_index', compact('service'));
    }

    public function createserviceget()
    {
        return view('admin.service.service_create');
    }

    public function createservicepost(ServiceCreateRequest $request)
    {
        $newservice = new Service();
        $newservice->name_ar = $request->input('name_ar');
        $newservice->name_en = $request->input('name_en');
        $newservice->description_en = $request->input('description_en');
        $newservice->description_ar = $request->input('description_ar');
        $newservice->order = $request->input('order');
        $logName = time() . '.' . Request()->log->getClientOriginalExtension();
        Request()->log->move(public_path('images/service'), $logName);
        $newservice->log = ($logName);
        $newservice->save();
        return redirect('/admin/service')->with('message', 'Add Service Is Done!');
    }

    public function editserviceget($id)
    {
        $service = Service::find($id);
        return view('admin.service.service_edit', compact('service'));
    }

    public function editservicepost(ServiceEditRequest $request, $id)
    {
        $newservice = Service::find($id);
        $newservice->name_ar = $request->input('name_ar');
        $newservice->name_en = $request->input('name_en');
        $newservice->description_en = $request->input('description_en');
        $newservice->description_ar = $request->input('description_ar');
        $newservice->order = $request->input('order');
        if ($request->log != null) {
            $logName = time() . '.' . Request()->log->getClientOriginalExtension();
            Request()->log->move(public_path('images/service'), $logName);
            $newservice->log = ($logName);
        }
        $newservice->save();
            return redirect('/admin/service')->with('message', 'Edit Service Is Done!');

    }

    public function deleteservice($id)
    {
        $service = Service::find($id);
        $description_service = Description_Service::where('service_id','=',$id)->get();
        foreach ($description_service as $descriptionservice)
        {
            $descriptionservice->delete();
        }
        $faq_service = Faq_Service::where('service_id','=',$id)->get();
        foreach ($faq_service as $faqservice)
        {
            $faqservice->delete();
        }
        $service->delete();
        return redirect()->back()->with('message', 'Delete Service Is Done!');
    }
}

?>