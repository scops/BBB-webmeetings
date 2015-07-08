@extends('app')

@section('content')
    <h1>{{ trans('meetings.meetings') }}</h1>

    @foreach ($meetings as $meeting)
        <meeting class="list-group-item">
            <h2>
                <a href="{{ action('MeetingController@show', [$meeting->id])}}">{{ $meeting->title}}</a>
            </h2>
        </meeting>
    @endforeach

@stop
