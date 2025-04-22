@extends('template')

@section('content')
    <h1>Liste of articles</h1>


    <a href="{{ route('articles.create') }}">Create new article</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $article)
                <tr>
                    <td>{{ $article['id'] }}</td>
                    <td>{{ $article['title'] }}</td>
                    <td>{{ $article['body'] }}</td>
                    <td>
                        <a href="{{ route('articles.show',$article['id']) }}">Show</a>
                        <a href="{{ route('articles.edit',$article['id']) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
