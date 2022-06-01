@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-6 mx-auto">
                <h1> Contact us: </h1>
                <form action="{{ route("guests.storeContact") }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Name
                        </span>
                        <input class="form-control" type="text" name="sender" id="sender" placeholder="Name and Surname">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            @
                        </span>
                        <input class="form-control" type="email" name="senderEmail" id="senderEmail">
                    </div>
                    <div class="mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Message
                        </span>
                        <textarea class="form-control" id="senderMessage" type="text" value="" name="senderMessage" rows="7"></textarea>
                    </div>

                    <button class="btn btn-lg btn-primary" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
