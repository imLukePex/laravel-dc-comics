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
                </a>
                <form class="delete-button"
                action="{{ route('users.destroy', $comic -> id) }}"
                method="POST">

                @csrf
                @method('DELETE')

                    <input type="submit" value="X">
                </form>
                <br>
                <br>
                <br>
            </li>
        @endforeach
    </ul>
@endsection
