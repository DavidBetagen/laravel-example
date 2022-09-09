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
    </head>
    <body>
        <div class="container">
           <div class="row mt-3">
                <div class="col-sm-3">
                    <a href="" class="text-decoration-none">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center" style="height: 140px;">
                                <i class="fa fa-file-excel-o mt-4" style="font-size:24px"></i><br>
                                <h5 class="card-title mt-2">Export Excel</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="/send-mail" class="text-decoration-none">
                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center" style="height: 140px;">
                                <i class="fa fa-envelope-o mt-4" style="font-size:24px"></i><br>
                                <h5 class="card-title mt-2">Send Mail</h5>
                            </div>
                        </div>
                    </a>
                </div>
           </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
