<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Program\ProgramCreateRequest;
use App\Http\Requests\admin\Program\ProgramEditRequest;
use App\Models\Description_Program;
use App\Models\Program;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexprogram()
    {
        $program = Program::orderby('order')->get();
        return view('admin.program.program_index', compact('program'));
    }

    public function createprogramget()
    {
        return view('admin.program.program_create');
    }

    public function createprogrampost(ProgramCreateRequest $request)
    {
        $newprogram = new Program();
        $newprogram->name_ar = $request->input('name_ar');
        $newprogram->name_en = $request->input('name_en');
        $newprogram->description_en = $request->input('description_en');
        $newprogram->description_ar = $request->input('description_ar');
        $newprogram->order = $request->input('order');
        $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
        Request()->image->move(public_path('images/program'), $imageName);
        $newprogram->image = ($imageName);
        $newprogram->save();
        return redirect('/admin/program')->with('message', 'Add Program Is Done!');
    }

    public function editprogramget($id)
    {
        $program = Program::find($id);
        return view('admin.program.program_edit', compact('program'));
    }

    public function editprogrampost(ProgramEditRequest $request, $id)
    {
        $newprogram = Program::find($id);
        $newprogram->name_ar = $request->input('name_ar');
        $newprogram->name_en = $request->input('name_en');
        $newprogram->description_en = $request->input('description_en');
        $newprogram->description_ar = $request->input('description_ar');
        $newprogram->order = $request->input('order');
        if ($request->image != null) {
            $imageName = time() . '.' . Request()->image->getClientOriginalExtension();
            Request()->image->move(public_path('images/program'), $imageName);
            $newprogram->image = ($imageName);
        }
            $newprogram->save();
            return redirect('/admin/program')->with('message', 'Edit Program Is Done!');
    }

}

?>