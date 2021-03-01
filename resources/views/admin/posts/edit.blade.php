@extends('layouts.app')
<div class="container form-group">
  <form action="{{route('admin.posts.update',['post' => $post->slug] )}}" method="post">
  @csrf
  @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input class="form-control" name="title" id="title" rows="3" value="{{$post->title}}"></input>
    </div>
    
    <div>
        <label for="body">Body:</label>
        <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Modifica</button>
  </form>
</div>