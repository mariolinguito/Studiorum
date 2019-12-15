@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form class="form-inline" action="/search" accept-charset="UTF-8" method="get">
                <div class="input-group flex-fill">
                    <input type="search" name="search" id="search" value="" placeholder="Search for courses, notes or info" class="form-control" aria-label="Search this site">
                    <div class="input-group-append">
                        <input type="submit" name="commit" value="Search" class="btn btn-primary" data-disable-with="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <a href="#">{{ __('home.notifications') }} <span class="badge badge-light">4</span></a>
                    <br>
                    <a href="{{ route('courses.create') }}">{{ __('home.option_1') }}</a>
                    <br>
                    <a href="{{ route('courses.index') }}">{{ __('home.option_2') }}</a>
                    <hr>

                    <b>Latino</b>
                    <br>
                    <b>Comparate</b>
                    <br>
                    <b>Letteratuta</b>
                    <br>
                    <b>Filosofia</b>
                    <br>
                    <b>Storia Moderna</b>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
