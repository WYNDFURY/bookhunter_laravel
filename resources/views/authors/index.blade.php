@extends('templates.index')

@section('title')
    Authors
@stop

@section('content')
    @php
        $authors = \App\Models\Book::orderBy('created_at', 'DESC')->paginate(9);
    @endphp

    <h2 class="text-2xl font-bold mb-4">Authors</h2>
    @include('authors._index', ['authors' => $authors])

    <div>Pagination</div>
    <div>{{ $authors->links() }}</div>

@stop
