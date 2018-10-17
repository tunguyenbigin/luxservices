@extends('schedules::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('schedules.name') !!}
    </p>
@stop
