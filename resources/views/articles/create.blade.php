@extends('template')

@section('content')
    <h1>Add new article</h1>

    <form action="{{ route('articles.store') }}" method="post">
@csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="body">Body</label>
        <textarea name="body" id="body"></textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
