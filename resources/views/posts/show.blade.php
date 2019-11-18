@extends('layouts.app')

@section('content')
    <button class="btn btn-default" onclick="{window.location.replace(document.referrer)}">Go Back</button>
    <h1>{{$post->title}}</h1>
    <img style="width:50%" src="{{ asset('storage/cover_images/'.$post->cover_image)}}" alt="Cover Image">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @guest
    @else
    @if (Auth::user()->id == $post->user_id)    
    <a href="{{route('posts.edit', ['post' => $post->id])}}" class="btn btn-default">Edit</a>

    <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post" class="pull-right">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @endif
    @endguest
@endsection