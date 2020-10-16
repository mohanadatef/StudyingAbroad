<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\admin\Country_Place\CountryPlaceCreateRequest;
use App\Http\Requests\admin\Country_Place\CountryPlaceEditRequest;
use App\Models\Country_Place;
use Illuminate\Support\Facades\DB;

class CountryPlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexcountryplace()
    {
        $country_place = Country_Place::with('country')->get();
        return view('admin.country_place.country_place_index', compact('country_place'));
    }

    public function createcountryplaceget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.country_place.country_place_create',compact('country'));
    }

    public function createcountryplacepost(CountryPlaceCreateRequest $request)
    {

        $newcountryplace = new Country_Place();
        $newcountryplace->name_en = $request->input('name_en');
        $newcountryplace->name_ar = $request->input('name_ar');
        $newcountryplace->description_en = $request->input('description_en');
        $newcountryplace->description_ar = $request->input('description_ar');
        $newcountryplace->order = $request->input('order');
        $newcountryplace->country_id = $request->input('country_id');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/country'), $imageName);
        $newcountryplace->image = ($imageName);
        $newcountryplace->save();
        return redirect('/admin/country_place')->with('message', 'Add country Places Is Done!');
    }

    public function editcountryplaceget($id)
    {
        $country_place = Country_Place::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        return view('admin.country_place.country_place_edit', compact('country_place','country'));
    }

    public function editcountryplacepost(CountryPlaceEditRequest $request, $id)
    {
        $newcountryplace = Country_Place::find($id);
        $newcountryplace->name_en = $request->input('name_en');
        $newcountryplace->name_ar = $request->input('name_ar');
        $newcountryplace->description_en = $request->input('description_en');
        $newcountryplace->description_ar = $request->input('description_ar');
        $newcountryplace->order = $request->input('order');
        $newcountryplace->country_id = $request->input('country_id');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/country'), $imageName);
            $newcountryplace->image = ($imageName);
        }
        $newcountryplace->save();
        return redirect('/admin/country_place')->with('message', 'Edit country Place Is Done!');

    }

    public function deletecountry($id)
    {
        $country_place = Country_Place::find($id);
        $country_place->delete();
        return redirect()->back()->with('message', 'Delete country Places Is Done!');
    }
}

?>