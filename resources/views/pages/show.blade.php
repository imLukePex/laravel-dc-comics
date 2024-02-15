@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>
        Comics List:
        <br>
        Title: {{ $comic -> title}}
        <br>
        Author: {{ $comic -> author}}
        <br>
    </h1>
    <h2>Description: {{ $comic -> description }}</h2>
    <br>
    <h2>Price: {{ $comic -> price }}</h2>
@endsection
