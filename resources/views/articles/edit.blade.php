@extends('template')

@section('content')
    <h1>Add new article</h1>

    <form action="{{ route('articles.update', ['id'=>$data['id']]) }}" method="post">
        @csrf
        @method('put')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $data['title'] }}">
        <label for="body">Body</label>
        <textarea name="body" id="body">{{ $data['body'] }}</textarea>
        <button type="submit">Submit</button>
    </form>
@endsection
