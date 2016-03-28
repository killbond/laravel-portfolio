@extends('layouts.front')
@section('content')

    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ $info['PHOTO_URL']->info }}" alt="">
            </div>
            <div class="col-lg-8">
                <h1>{!! View::make('includes.info', ['entry' => $info['NAME']]) !!}</h1>
                <hr>
                <p><h4><b>Email:</b> {!! View::make('includes.info', ['entry' => $info['EMAIL']]) !!}</h4></p>
                <p><h4><b>Phone:</b> {!! View::make('includes.info', ['entry' => $info['PHONE']]) !!}</h4></p>
                @foreach ($skills as $skill)
                    <p><h4><b>{{ $skill->group }}:</b> {{ $skill->skills }}</h4></p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1>Projects:</h1>
        </div>
    </div>
    <hr>

    @foreach ($projects as $project)
        @include('project.view', ['entry' => $project])
    @endforeach

    @if (Request::matchIp())
        @include('project.create')
    @endif

@stop