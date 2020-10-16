<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\admin\Country\CountryCreateRequest;
use App\Http\Requests\admin\Country\CountryEditRequest;
use App\Models\American_High_School;
use App\Models\Country;
use App\Models\Country_Place;
use App\Models\Description_Program;
use App\Models\Description_Service;
use App\Models\Faq_Service;
use App\Models\Gce;
use App\Models\International_Baccalaureate;
use App\Models\National_Curriculum;
use App\Models\Requirement;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexcountry()
    {
        $country = Country::all();
        return view('admin.country.country_index', compact('country'));
    }

    public function createcountryget()
    {
        return view('admin.country.country_create');
    }

    public function createcountrypost(CountryCreateRequest $request)
    {

        $newcountry = new Country();
        $newcountry->name_en = $request->input('name_en');
        $newcountry->name_ar = $request->input('name_ar');
        $newcountry->about_country_en = $request->input('about_country_en');
        $newcountry->about_country_ar = $request->input('about_country_ar');
        $newcountry->residence_country = $request->input('residence_country');
        $newcountry->residence_usd = $request->input('residence_usd');
        $newcountry->transportation_country = $request->input('transportation_country');
        $newcountry->transportation_usd = $request->input('transportation_usd');
        $newcountry->food_country = $request->input('food_country');
        $newcountry->food_usd = $request->input('food_usd');
        $newcountry->cinema_country = $request->input('cinema_country');
        $newcountry->cinema_usd = $request->input('cinema_usd');
        $newcountry->net_country = $request->input('net_country');
        $newcountry->net_usd = $request->input('net_usd');
        $newcountry->clothing_country = $request->input('clothing_country');
        $newcountry->clothing_usd = $request->input('clothing_usd');
        $newcountry->order = $request->input('order');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/country'), $imageName);
        $newcountry->image = ($imageName);
        $imageNameloge = time() . '-country.' . Request()->loge->getClientOriginalExtension();
        Request()->loge->move(public_path('images/country'), $imageNameloge);
        $newcountry->loge = ($imageNameloge);
        $newcountry->save();
        return redirect('/admin/country')->with('message', 'Add country Is Done!');
    }

    public function editcountryget($id)
    {
        $country = Country::find($id);
        return view('admin.country.country_edit', compact('country'));
    }

    public function editcountrypost(CountryEditRequest $request, $id)
    {
        $newcountry = Country::find($id);
        $newcountry->name_en = $request->input('name_en');
        $newcountry->name_ar = $request->input('name_ar');
        $newcountry->about_country_en = $request->input('about_country_en');
        $newcountry->about_country_ar = $request->input('about_country_ar');
        $newcountry->residence_country = $request->input('residence_country');
        $newcountry->residence_usd = $request->input('residence_usd');
        $newcountry->transportation_country = $request->input('transportation_country');
        $newcountry->transportation_usd = $request->input('transportation_usd');
        $newcountry->food_country = $request->input('food_country');
        $newcountry->food_usd = $request->input('food_usd');
        $newcountry->cinema_country = $request->input('cinema_country');
        $newcountry->cinema_usd = $request->input('cinema_usd');
        $newcountry->net_country = $request->input('net_country');
        $newcountry->net_usd = $request->input('net_usd');
        $newcountry->clothing_country = $request->input('clothing_country');
        $newcountry->clothing_usd = $request->input('clothing_usd');
        $newcountry->order = $request->input('order');
        if ($request->loge != null && $request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/country'), $imageName);
            $newcountry->image = ($imageName);
            $imageNameloge = time() . '-country.' . Request()->loge->getClientOriginalExtension();
            Request()->loge->move(public_path('images/country'), $imageNameloge);
            $newcountry->loge = ($imageNameloge);
        } elseif ($request->loge != null) {
            $logeName = time() . '-country.' . Request()->loge->getClientOriginalExtension();
            Request()->loge->move(public_path('images/country'), $logeName);
            $newcountry->loge = ($logeName);
        } elseif ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/country'), $imageName);
            $newcountry->image = ($imageName);
        }
            $newcountry->save();
            return redirect('/admin/country')->with('message', 'Edit country Is Done!');

    }
}

?>