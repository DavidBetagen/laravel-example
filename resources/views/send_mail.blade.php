<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ asset("/assets/lib/termynal-master/termynal.css") }}">
    </head>
    <body>
        <div class="container">
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
        <script src="{{ asset("/assets/lib/termynal-master/termynal.js") }}" data-termynal-container="#termynal"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
