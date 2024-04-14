<?php

namespace App\Http\Controllers;

use App\Models\Student;
use domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class StudentContoller extends Controller
{

    public function index()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.students.index')->with($response);
    }

    public function store(Request $request)
    {
        StudentFacade::store($request->all());

        return redirect()->back();
    }

    public function view()
    {
        $response['students'] = StudentFacade::all();
        return view('pages.students.view')->with($response);
    }

    public function delete($student_id)
    {
        StudentFacade::delete($student_id);
        return redirect()->back();
    }

    public function status($student_id)
    {
        StudentFacade::status($student_id);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $response['student'] = StudentFacade::get($request['student_id']);
        return view('pages.students.edit')->with($response);
    }

    public function update(Request $request, $student_id)
    {
        StudentFacade::update($request->all(), $student_id);
        return redirect()->back();
    }
}
