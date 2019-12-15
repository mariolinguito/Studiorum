@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <form method="post" action="{{ route('courses.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="course_name"><b>{{ __('courses.name') }}</b></label>
                                            <input type="text" class="form-control" name="course_name"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_prof"><b>{{ __('courses.prof_name') }}</b></label>
                                            <input type="text" class="form-control" name="course_prof"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_time"><b>{{ __('courses.average_time') }}</b></label>
                                            <input type="text" class="form-control" name="course_average_time"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="course_average_vote"><b>{{ __('courses.average_vote') }}</b></label>
                                            <input type="text" class="form-control" name="course_average_vote"/>
                                        </div>

                                        <br>

                                        <button type="submit" class="btn btn-primary">{{ __('courses.create') }}</button>
                                        <button type="submit" class="btn btn-danger">{{ __('courses.back') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
