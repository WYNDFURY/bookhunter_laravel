@extends('templates.index')

@section('title')
    Books
@stop

@section('content')

    <h2 class="text-2xl font-bold mb-4">Book</h2>
    @include('books._show', ['books' => $books])

@stop
