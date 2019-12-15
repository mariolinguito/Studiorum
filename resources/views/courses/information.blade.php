@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        @foreach($courses as $course)
                            <h2><b>{{$course->course_name}}</b></h2>
                            <h5>{{$course->course_prof}}</h5>

                            <hr>

                            @foreach($courses_information as $course_information)
                                <h5><b>{{ __('courses.average_time') }}</b> {{$course_information->course_time}} {{ __('courses.minutes') }}</h5>
                                <h5><b>{{ __('courses.average_vote') }}</b> {{$course_information->average_vote}}/30L</h5>
                            @endforeach

                            <hr>

                            <h5 class="font-weight-bold">{{ __('courses.news') }}</h5>

                            <hr>

                            <h5 class="font-weight-bold">{{ __('courses.notes') }}</h5>

                            <br>

                            @foreach($courses_notes as $course_notes)
                                <p><b>{{$course_notes->id}}</b>. {{$course_notes->course_note}}</p>
                            @endforeach

                            <hr>

                            <h5 class="font-weight-bold">{{ __('courses.questions') }}</h5>

                            <br>

                            @foreach($courses_questions as $course_questions)
                                <p><b>{{$course_questions->id}}</b>. {{$course_questions->course_question}}</p>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
