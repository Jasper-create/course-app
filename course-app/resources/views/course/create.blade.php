@extends('layouts.app')

@section('content')

<h1>Add Course</h1>

<form method="post" action="{{route('course.store')}}">
@csrf

<div>
    <label for="title">Course Title</label>
    <input type="text" name="title" required/>
</div>

<div>
    <label for="description">Course Description</label>
    <input type="text" name="description" required/>
</div>

<div>
    <label for="courseHead">Course Head</label>
    <input type="text" name="courseHead" required/>
</div>

<button type="submit">Submit</button>

</form>

@endsection