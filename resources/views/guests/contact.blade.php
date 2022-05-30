@extends('layouts.app')

@section('content')
<div class="container"></div>
    <div class="row justify-content-center p-5">
        <div class="col-6">
            <form action="{{route('guest.storeContact')}} ">
                @csrf
                @method('POST')
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        User
                    </span>
                    <input type="text" class="form-control" placeholder="Name and Surname" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        @
                    </span>
                    <input type="email" class="form-control" placeholder="username@email.com" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Message
                    </span>
                    <input type="text" class="form-control" placeholder="Write your message here" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="text-center">
                    <button type="submit"
                class="btn btn-outline-dark">
                    Submit
                </button>
                </div>
            </form>
        </div>
    </div>
@endsection
