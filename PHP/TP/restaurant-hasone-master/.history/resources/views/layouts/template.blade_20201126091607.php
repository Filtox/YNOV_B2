<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('titre') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ URL::route('contact.index') }}">TP-CONTACT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Contacts <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::route('articles.index') }}">Articles <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('articles.create') }}">Create</a>
                </li>
    {{--            <li class="nav-item dropdown">--}}
    {{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                    Dropdown--}}
    {{--                </a>--}}
    {{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
    {{--                    <a class="dropdown-item" href="#">Action</a>--}}
    {{--                    <a class="dropdown-item" href="#">Another action</a>--}}
    {{--                    <div class="dropdown-divider"></div>--}}
    {{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item">--}}
    {{--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
    {{--            </li>--}}
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
    <h1> @yield('titre') </h1>

    <div> @yield('contenue') </div>

    <p> Mon pied de Page </p>
</body>
</html>