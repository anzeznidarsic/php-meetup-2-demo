@extends('layout')

@section('content')
    
<h1>Edit</h1>

{!! Form::model($attendee, ['route' => ['attendees.update', $attendee->id], 'method' => 'PUT']) !!}
    @include('attendees._form')
{!! Form::close() !!}

@stop