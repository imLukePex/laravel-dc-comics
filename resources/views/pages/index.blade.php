@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Comics List:</h1>

    <a href=" {{ route('users.create') }} ">CREATE</a>
    <br><br>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href=" {{ route('users.show', $comic -> id) }} ">

                    Title: {{ $comic -> title}}
                    <br>
                    Author: {{ $comic -> author}}
                    <br>
                    Description: {{ $comic -> description}}
                    <br>
                    Price: {{ $comic -> price}}
                    <br>
                    <br>
                    <br>
                </a>

            </li>
        @endforeach
    </ul>
@endsection
