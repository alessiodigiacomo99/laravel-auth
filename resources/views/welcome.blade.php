@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home Page</h1>
    <table class="table">
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>BODY</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection