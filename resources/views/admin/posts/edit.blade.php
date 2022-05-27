@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="col-6 py-3">
            <form class="text-center" action="{{route("admin.posts.update", $post)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text">Title</span>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="col-12">
                    @error('title')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">post image</span>
                    <input type="text" class="form-control" name="post_image" value="{{$post->post_image}}">
                </div>
                <div class="col-12">
                    @error('post_image')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Author</span>
                    <input type="text" class="form-control" name="author" value="{{$post->author}} ">
                </div>
                <div class="col-12">
                    @error('author')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Content</span>
                    <input type="text" class="form-control" name="content" value="{{$post->content}} ">
                </div>
                <div class="col-12">
                    @error('content')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
