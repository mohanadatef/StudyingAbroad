<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Contact_Us\ContactUsCreateRequest;
use App\Http\Requests\admin\Contact_Us\ContactUsEditRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexcontactus()
    {
        $contactus = ContactUs::all();
        return view('admin.contact_us.contact_us_index', compact('contactus'));
    }

    public function createcontactusget()
    {
        return view('admin.contact_us.contact_us_create');
    }

    public function createcontactuspost(ContactUsCreateRequest $request)
    {
        $newcontactus = new ContactUs();
        $newcontactus->address_ar = $request->input('address_ar');
        $newcontactus->address_en = $request->input('address_en');
        $newcontactus->email = $request->input('email');
        $newcontactus->time_work_ar = $request->input('time_work_ar');
        $newcontactus->time_work_en = $request->input('time_work_en');
        $newcontactus->latitude = $request->input('latitude');
        $newcontactus->longitude = $request->input('longitude');
        $newcontactus->phone_ar = $request->input('phone_ar');
        $newcontactus->phone_en = $request->input('phone_en');
        $newcontactus->save();
        return redirect('/admin/contact_us')->with('message', 'Add Is Done!');
    }

    public function editcontactusget($id)
    {
        $contactus = contactus::find($id);
        return view('admin.contact_us.contact_us_edit', compact('contactus'));
    }

    public function editcontactuspost(ContactUsEditRequest $request, $id)
    {
        $newcontactus = ContactUs::find($id);
        $newcontactus->address_ar = $request->input('address_ar');
        $newcontactus->address_en = $request->input('address_en');
        $newcontactus->email = $request->input('email');
        $newcontactus->time_work_ar = $request->input('time_work_ar');
        $newcontactus->time_work_en = $request->input('time_work_en');
        $newcontactus->latitude = $request->input('latitude');
        $newcontactus->longitude = $request->input('longitude');
        $newcontactus->phone_ar = $request->input('phone_ar');
        $newcontactus->phone_en = $request->input('phone_en');
        $newcontactus->save();
        return redirect('/admin/contact_us')->with('message', 'Edit contact_us Is Done!');
    }
}

?>