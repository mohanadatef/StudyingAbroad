<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\BookRequest;
use App\Http\Requests\frontend\CallUsCreateRequest;
use App\Models\AboutUs;
use App\Models\American_High_School;
use App\Models\Book;
use App\Models\Call_Us;
use App\Models\Country;
use App\Models\Country_Place;
use App\Models\Description_Program;
use App\Models\Description_Service;
use App\Models\Faq_Service;
use App\Models\Gce;
use App\Models\Home_Slider;
use App\Models\International_Baccalaureate;
use App\Models\National_Curriculum;
use App\Models\Program;
use App\Models\Requirement;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailCallUs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function language(Request $request)
    {
        //save for 1 month
        return redirect()->back()->withCookie('language',$request->lang,45000);
    }

    public function home()
    {
        $home_slider=Home_Slider::all();
        $myslider=Home_Slider::first();
        $servicemy=Service::first();
        $countrymy=Country::first();
        return view('frontend.home',compact('home_slider','myslider','servicemy','countrymy'));
    }

    public function about_us()
    {
        $about_us=AboutUs::first();
        return view('frontend.about_us',compact('about_us'));
    }
    public function contact_us()
    {
        $check=0;
        return view('frontend.contact_us',compact('check'));
    }

    public function call_us(CallUsCreateRequest $request)
    {
        $newcallus = new Call_Us();
        $newcallus->name = $request->input('name');
        $newcallus->message = $request->input('message');
        $newcallus->email = $request->input('email');
        $newcallus->save();
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );
        mail::to($request->input('email'))->send(new SendMailCallUs($data));
        $check=1;
        return view('frontend.contact_us',compact('check'));

    }

    public function bookget()
    {
        $country_book = DB::table("countries")->pluck( language("name_ar","name_en"), "id");
        $program_book = DB::table("programs")->pluck( language("name_ar","name_en"), "id");
        $service_book = DB::table("services")->pluck( language("name_ar","name_en"), "id");
        $check=0;
        return view('frontend.book',compact('country_book','program_book','service_book','check'));
    }

    public function bookpost(BookRequest $request)
    {
        $newbook = new Book();
        $newbook->full_name = $request->input('full_name');
        $newbook->country_id = $request->input('country_id');
        $newbook->program_id = $request->input('program_id');
        $newbook->email = $request->input('email');
        $newbook->english_level = $request->input('english_level');
        $newbook->phone = $request->input('phone');
        $newbook->country_level = $request->input('country_level');
        $newbook->save();
        $newbook->service()->sync((array)$request->input('service'));
        $newbook->save();
        $check=1;
        $country_book = DB::table("countries")->pluck( language("name_ar","name_en"), "id");
        $program_book = DB::table("programs")->pluck( language("name_ar","name_en"), "id");
        $service_book = DB::table("services")->pluck( language("name_ar","name_en"), "id");
        return view('frontend.book',compact('country_book','program_book','service_book','check'));
    }

    public function program($slug,$slug1)
    {
        $programmy=Program::where('slug',$slug)->first();
        $countrymy=Country::where('slug',$slug1)->first();
        $description_program=Description_Program::where('program_id',$programmy->id)->where('country_id',$countrymy->id)->get();
        $mydescription=Description_Program::where('program_id',$programmy->id)->where('country_id',$countrymy->id)->first();
        return view('frontend.program',compact('description_program','programmy','countrymy','mydescription'));
    }

    public function requirement($slug)
    {
        $country=Country::where('slug',$slug)->first();
        $requirement=Requirement::where('country_id',$country->id)->get();
        return view('frontend.requirement',compact('requirement'));
    }

    public function country_info($slug)
    {
        $country_info=Country::where('slug',$slug)->first();
        $country_place=Country_Place::where('country_id',$country_info->id)->get();
        return view('frontend.country_info',compact('country_info','country_place'));
    }

    public function certificates($slug)
    {
        $country=Country::where('slug',$slug)->first();
        $national_curriculum = National_Curriculum::where('country_id',$country->id)->get();
        $american_high_school = American_High_School::where('country_id',$country->id)->get();
        $gce = Gce::where('country_id',$country->id)->first();
        $international_baccalaureate = International_Baccalaureate::where('country_id',$country->id)->first();
        return view('frontend.certificates',compact('gce','international_baccalaureate',
            'american_high_school','national_curriculum'));
    }

    public function service($slug,$slug1)
    {
        $servicemy=Service::where('slug',$slug)->first();
        $country=Country::where('slug',$slug1)->first();
        $description_service=Description_Service::where('service_id',$servicemy->id)->where('country_id',$country->id)->get();
        $faq_service=Faq_Service::where('service_id',$servicemy->id)->where('country_id',$country->id)->get();
        if($faq_service == null)
        {
            $faq_service = null;
        }
        return view('frontend.service',compact('description_service','servicemy','faq_service'));
    }
}
