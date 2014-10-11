@extends('layout')

@section('content')
    
<h1>{{ $attendee->name }}</h1>

<h3>Experience: {{ $attendee->experience }}</h3>

{!! link_to_route('attendees.edit', 'Edit', [$attendee->id], ['class' => 'btn btn-warning']) !!}

@stop