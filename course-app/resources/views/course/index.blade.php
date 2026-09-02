@extends('layouts.app')

@section('content')
<h1>
    Courses
</h1>

<table>
    <thead>
        <tr>
            <th>Course Name</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->title}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->courseHead}}</td>

                {{$course->id}}
                <td>
                    <a href="{{route('course.show', $course->id)}}">View</a>
                    <a href="{{route('course.edit', $course->id)}}">Edit</a>
             
                    <form method="POST" action="{{ route('course.destroy', $course->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
