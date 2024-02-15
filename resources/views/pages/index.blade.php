@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Comics List:</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic -> title}}
                <br>
                {{ $comic -> author}}
                <br>
                {{ $comic -> description}}
                <br>
                {{ $comic -> price}}
                <br>
                <br>
                <br>
            </li>
        @endforeach
    </ul>
@endsection
