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
            <form class="text-center" action="{{route("admin.categories.store")}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Category name</span>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-12">
                    @error('name')
                        <h5 class="alert alert-danger">
                            {{ $message }}
                        </h5>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Colour</span>
                    <input type="text" class="form-control" name="colour">
                </div>
                <div class="col-12">
                    @error('colour')
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
