@extends('layouts.app')

@section('content')
<div class="container mx-4">
    Welcome {{ Auth::user()->name }} to Admin Page, feel free to create, or edit your posts
    <ul>
        <li>
            <a href="{{route('admin.posts.index')}}">
                Posts
            </a>
        </li>
        <li>
            <a href="{{route('admin.categories.index')}}">
                Categories
            </a>
        </li>
    </ul>
</div>
@endsection
