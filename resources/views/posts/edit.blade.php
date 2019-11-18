@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="title">Title</label>
        <input class="form-control" id="title" type="text" name="title" value="{{$post->title}}" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="article-ckeditor" type="text" name="body" placeholder="Post Body">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <input type="file"name="cover_image">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
    
@endsection