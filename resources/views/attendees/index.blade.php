@extends('layout')

@section('content')
    
<h1>Attendees</h1>

<ul class="list-group">

@unless ($attendees->count())
No attendees in the database yet. Add some :)
@endunless

@foreach ($attendees as $attendee)
    <li class="list-group-item">
        {!! link_to_route('attendees.show', $attendee->name, [$attendee->id]) !!}
        <div class="pull-right">
        {!! Form::open(['route' => ['attendees.destroy', $attendee->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
        {!! Form::close() !!}
        </div>
    </li>
@endforeach

</ul>

{!! link_to_route('attendees.create', 'Add', [], ['class' => 'btn btn-primary btn-block']) !!}

@stop