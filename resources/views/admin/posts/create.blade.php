@extends('layouts.app')
@section('content')
<form  class="container" action="{{route('admin.posts.store')}}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="">
        </div>

        <div>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Add Post</button>
    </form>
@endsection