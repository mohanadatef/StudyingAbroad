<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Description_Program\DescriptionProgramCreateRequest;
use App\Http\Requests\admin\Description_Program\DescriptionProgramEditRequest;
use App\Models\Description_Program;
use Illuminate\Support\Facades\DB;

class DescriptionProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexdescriptionprogram()
    {
        $description_program = Description_Program::with('country','program')->get();
        return view('admin.description_program.description_program_index', compact('description_program'));
    }

    public function createdescriptionprogramget()
    {
        $country = DB::table("countries")->pluck("name_en", "id");
        $program = DB::table("programs")->pluck("name_en", "id");
        return view('admin.description_program.description_program_create',compact('country','program'));
    }

    public function createdescriptionprogrampost(DescriptionProgramCreateRequest $request)
    {
        $newdescriptionprogram = new Description_Program();
        $newdescriptionprogram->title_ar = $request->input('title_ar');
        $newdescriptionprogram->title_en = $request->input('title_en');
        $newdescriptionprogram->description_ar = $request->input('description_ar');
        $newdescriptionprogram->description_en = $request->input('description_en');
        $newdescriptionprogram->program_id = $request->input('program_id');
        $newdescriptionprogram->country_id = $request->input('country_id');
        $newdescriptionprogram->order = $request->input('order');
        $logName = time() . '-program.' . Request()->log->getClientOriginalExtension();
        Request()->log->move(public_path('images/description_program'), $logName);
        $newdescriptionprogram->log = ($logName);
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/description_program'), $imageName);
        $newdescriptionprogram->image = ($imageName);
        $newdescriptionprogram->save();
        return redirect('/admin/description_program')->with('message', 'Add Description Program Is Done!');
    }

    public function editdescriptionprogramget($id)
    {
        $description_program = Description_Program::find($id);
        $country = DB::table("countries")->pluck("name_en", "id");
        $program = DB::table("programs")->pluck("name_en", "id");
        return view('admin.description_program.description_program_edit', compact('description_program','country','program'));
    }

    public function editdescriptionprogrampost(DescriptionProgramEditRequest $request, $id)
    {
        $newdescriptionprogram = Description_Program::find($id);
        $newdescriptionprogram->title_ar = $request->input('title_ar');
        $newdescriptionprogram->title_en = $request->input('title_en');
        $newdescriptionprogram->description_ar = $request->input('description_ar');
        $newdescriptionprogram->description_en = $request->input('description_en');
        $newdescriptionprogram->program_id = $request->input('program_id');
        $newdescriptionprogram->country_id = $request->input('country_id');
        $newdescriptionprogram->order = $request->input('order');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/description_program'), $imageName);
            $newdescriptionprogram->image = ($imageName);
        }
        if ($request->log != null) {
            $logName = time() . '-program.' . Request()->log->getClientOriginalExtension();
            Request()->log->move(public_path('images/description_program'), $logName);
            $newdescriptionprogram->log = ($logName);
        }
            $newdescriptionprogram->save();
            return redirect('/admin/description_program')->with('message', 'Edit Description Program Is Done!');
    }

    public function deletedescriptionprogram($id)
    {
        $description_program = Description_Program::find($id);
        $description_program->delete();
        return redirect()->back()->with('message', 'Delete Description Program Is Done!');
    }
}

?>