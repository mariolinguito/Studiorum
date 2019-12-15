@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <table class="table table-borderless">
                        <br>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->course_name}}</td>
                                <td>{{$course->course_prof}}</td>
                                <td>
                                    <a href="{{ route('course_join', $course->id) }}" class="btn btn-primary float-right">{{ __('courses.table_join') }}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection