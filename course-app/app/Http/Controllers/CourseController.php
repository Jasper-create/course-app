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
    }

    public function store(Request $request){
        //This would create the enr for the course
    }

    public function show($id){
        //fetching the data from the database
    }

    public function edit($id){
        //edit data
    }

    public function update(Request $request, $iid){
        //Logic to update the record in the database and do something post that
    }

    public function destroy($id){
        //Delete data entry
    }
}
