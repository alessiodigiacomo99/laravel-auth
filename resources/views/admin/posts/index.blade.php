@extends('layouts.app')
@section('content')
    <div class="container">
        <a class="btn btn-primary text-capitalize" href="{{route('admin.posts.create')}}">crea nuovi post</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>BODY</th>
                    <th>SLUG</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', ['post' => $post->slug ]) }}"><i class="fas fa-eye fa-lg fa-fw"></i></a>
                            <a class="btn btn-warning" href="{{ route('admin.posts.edit', ['post' => $post->slug ]) }}"><i class="fas fa-pencil-ruler fa-lg fa-fw"></i></a>
                            <div class="form-group">
                                <form action="{{route('admin.posts.destroy', ['post' => $post->slug ] )}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt fa-lg fa-fw"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection