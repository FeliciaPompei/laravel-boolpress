@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="row">
        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>
        <div class="col-6 p-4">
            @if (str_starts_with($post->post_image, 'https://'))
            <img src="{{$post->post_image}}" alt="{{$post->title}}">
            @else
            <img src="{{asset('storage/'. $post->post_image)}}" alt="{{$post->title}}">
            @endif

        </div>
        <div class="col-6 p-4">
            <h1>
                {{$post->title}}
            </h1>
            <h6>
                author: {{$post->author}}
            </h6>
            <span>
                {{$post->created_by}}
            </span>
            <p>
                {{$post->content}}
            </p>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-evenly align-items-center">
        <a href="{{route("admin.posts.show", $post->id-1)}}"
            class="btn btn-lg bnt-info my-btn-size">
            &#8656;
        </a>

        <a href="{{route("admin.posts.show", $post->id+1)}}"
            class="btn btn-lg bnt-info my-btn-size">
            &#8658;
        </a>
    </div>
</div>
@endsection
