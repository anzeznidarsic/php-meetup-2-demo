@extends('layout')

@section('content')

<h1>Hello Slovenian PHP meetup people:)</h1>

{!! link_to_route('attendees.index', 'Attendees demo') !!}

@stop