@extends(('layouts.app'))

@section('content')

    <h1>Title: {{$course->title}}</h1>
    <p>Description: {{$course->description}}</p>
    <p>Course Head: {{$course->courseHead}}</p>

@endsection