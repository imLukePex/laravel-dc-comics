@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>NEW COMIC</h1>

    <form action="{{ route('users.store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <br>
        <input type="submit" value="CREATE">

    </form>
@endsection
