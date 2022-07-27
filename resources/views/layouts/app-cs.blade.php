<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: white;
            }

            .navbar,.jumbotron , footer{
                color: white;
                background: rgb(0,196,204);
                background: linear-gradient(94deg, rgba(0,196,204,1) 50%, rgba(124,42,232,1) 100%);
            }

            .jumbotron{
                min-height: 88vh;
            }

            .navbar-brand{
                font-size: 26px;
            }

            .nav-link{
                color:rgba(255, 255, 255, 1) !important;
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar-cs')

        @yield('content')

       @include('layouts.footer-cs')

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function(){
            let elm = "";
            const img = '{{asset('img/cunkybar.jpg')}}'
            console.log(img);
            for(let i=1;i<9;i++){
                elm += `<div class="col-lg-3 my-2">
                        <div class="card">
                          <img src="${img}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Cunky Bar 1Kg</h5>
                            <p class="card-text">Rp. 3000/minggu</p>
                            <a href="#" class="btn btn-primary">Pilih</a>
                          </div>
                        </div>
                    </div>`
            }
            $("#list-card-paket").append(elm);

            $("#belanja").click(function(){   
             $('html, body').animate({
                scrollTop: $("#"+$(this).data("id")).offset().top
              }, 1000);
            })
        })
    </script>
    </body>
</html>
