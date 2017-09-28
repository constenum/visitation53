<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # get all schools
        $schools = School::all();

        # get all students
        $students = Student::all();

        return view('student.index')->with(['schools' => $schools, 'students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # get all schools
        $schools = School::all();
        return view('student/create')->with(['schools' => $schools]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validate New Student Form
        $this->validate($request, [
            'school_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        # Insert New Student Record
        $student = new Student();
        $student->school_id = $request->input('school_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->preferred_name = $request->input('preferred_name');
        $student->street_address = $request->input('street_address');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip_code = $request->input('zip_code');
        $student->telephone_number = $request->input('telephone_number');
        $student->phone_type = $request->input('phone_type');
        $student->mother_first_name = $request->input('mother_first_name');
        $student->mother_last_name = $request->input('mother_last_name');
        $student->father_first_name = $request->input('father_first_name');
        $student->father_last_name = $request->input('father_last_name');
        $student->save();

        \Session::flash('flash_message', 'Thank you, you have checked in successfully!');

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        # get all schools
        $schools = School::all();

        return view('student.edit')->with(['schools' => $schools, 'student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        # Validate Edit Student Form
        $this->validate($request, [
            'school_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        # Update Student Record
        $student = Student::find($request->id);
        $student->school_id = $request->input('school_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->preferred_name = $request->input('preferred_name');
        $student->street_address = $request->input('street_address');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip_code = $request->input('zip_code');
        $student->telephone_number = $request->input('telephone_number');
        $student->phone_type = $request->input('phone_type');
        $student->mother_first_name = $request->input('mother_first_name');
        $student->mother_last_name = $request->input('mother_last_name');
        $student->father_first_name = $request->input('father_first_name');
        $student->father_last_name = $request->input('father_last_name');
        $student->save();

        \Session::flash('flash_message', 'Thank you, you have checked in successfully!');

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
