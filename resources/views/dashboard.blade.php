@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{route('posts.create')}}">Create Post</a>
                    @if (count($posts) > 0)
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a class="btn btn-default" href="{{ route('posts.edit', ['post' => $post->id])}}">Edit</a></td>
                            <td>
                                <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3 class="text-center">You Have No Posts</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
