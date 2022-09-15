
<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Send Mail')
 
@section('content')
<div>
    @if (Session::has('message'))
        <div class="alert alert-success mt-3">
            {{ Session::get('message') }}
        </div>
    @endif
   <div class="row justify-content-md-center mt-4 mb-3">
        <div class="col-sm-6">
            <form action="{{ url('/send-mail') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="to" class="form-label">To</label>
                    <input type="email" name="to" class="form-control" id="to" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="3" placeholder="Content"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-light" type="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        Send
                    </button>
                    <a href="/" class="btn btn-light" type="button">
                        Back
                    </a>
                </div>
            </form>
        </div>
   </div>
   <div class="row mt-4 mb-5">
        <div class="col-sm-12">
            <p><strong>Step 1 >></strong> Generating Mailables name <strong>SendMail</strong></p>
            <div id="termynal" data-termynal>
                <span data-ty="input">php artisan make:mail SendMail</span>
                <span data-ty="progress"></span>
                <span data-ty>Mail created successfully.</span>
            </div>

            <p class="mt-4">You will see that in <strong>app/Mail</strong></p>
            <img src="{{ asset('images/mails/path.png') }}" alt="" height="450px">
            <img src="{{ asset('images/mails/class.jpg') }}" height="450px">

            <p class="mt-5"><strong>Step 2 >> </strong>modify <strong>class SendMail</strong> and create content file at <strong>views/mail/content.blade.php</strong></p>
            <img src="{{ asset('images/mails/class_modify.jpg') }}" alt="" height="450px">
            <img src="{{ asset('images/mails/content.jpg') }}" alt="" height="450px">

            <p class="mt-5"><strong>Step 3 >></strong>Call <strong>function sendMail</strong> like this! </p>
            <img src="{{ asset('images/mails/mail_controller.jpg') }}" alt="" height="450px">
        </div>
   </div>
</div>

@endsection