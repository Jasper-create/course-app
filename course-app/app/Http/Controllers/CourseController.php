<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        //List all
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create(){
        //routing to page/view whish will hold the create form
        return view('course.create');
    }

    public function store(Request $request){
        //This would create the enr for the course

        //on this sample we skip the verification but on practice you should not do so.
        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show($id){
        //fetching the data from the database
    }

    public function edit($id){
        //edit data
        $course=Course::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        //Logic to update the record in the database and do something post that
        //use validation first before updating data
        Course::find($id)->update($request->all());
        return redirect()->route('course.index');
    }

    public function destroy($id){
        //Delete data entry
    }
}
