@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
        <input class="form-control" id="title" value="{{old('title')}}" type="text" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
        <textarea class="form-control" id="article-ckeditor" type="text" name="body" placeholder="Post Body">{{old('body')}}</textarea>
        </div>
        <div class="form-group">
            <input type="file"name="cover_image">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
    
@endsection