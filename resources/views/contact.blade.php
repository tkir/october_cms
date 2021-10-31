@extends('layouts.app')

@section('title-block')
    Contact
@endsection

@section('content')
    <h1>Our contacts</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Enter your name
                <input type="text" name="name" class="form-control">
            </label>
            <label>Enter email
                <input type="text" name="email" class="form-control">
            </label>
            <label>Enter subject
                <input type="text" name="subject" class="form-control">
            </label>
        </div>

        <div class="form-group">
            <label>Message
                <textarea class="form-control" name="message"></textarea>
            </label>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
