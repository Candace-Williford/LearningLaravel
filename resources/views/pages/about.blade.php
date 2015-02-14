@extends('app')

@section('content')
    <h1>This is the about page</h1>


    @if (count($people))<!--make sure some data is returned-->
        <h3>People I Like:</h3>

        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
@stop