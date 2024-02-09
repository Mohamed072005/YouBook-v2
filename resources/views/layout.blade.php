<DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>@yield('title', 'YouBook')</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
        <style>
            .navbar-a-hover:hover {
                color: blue;
            }
        </style>
    </head>


    <body>

        <nav class="navbar navbar-expand-lg bg-info-subtle">
            <div class="container-fluid row d-flex justify-content-around align-items-center ">
                <div class="col-1">
                    <a class="navbar-brand" href="{{Route('show')}}">
                        <h2><span class=" text-primary">You</span><span class="text-secondary">Book</span></h2>
                    </a>
                </div>
                <div class="col-5 text-end" id="">
                    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(!session('first_name') == null)
                                {{session('first_name')}}
                            @else
                                acrions
                            @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="userDropdown">
                                @if(!session('user_id') == null)
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('userLogout') }}">Logout</a></li>
                                @else
                                <li><a class="dropdown-item" href="http://localhost/YouBook-v2/public/to.login/">Login</a></li>
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-danget border border-bottom">
            <div class="container d-flex justify-content-evenly pt-2 pb-2">
                <a href="http://localhost/YouBook-v2/public/to.book" class="navbar-a-hover navbar-brand">To Create Book</a>
                <a href="{{Route('show')}}" class="navbar-a-hover navbar-brand">To Book</a>
                <a href="" class="navbar-a-hover navbar-brand">To About</a>
            </div>
        </div>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>