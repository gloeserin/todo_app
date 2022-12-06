<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/img/julyon.png')}}" type="image/x-icon">
    <title>Todo App</title>
</head>
<body>
  
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
   {{-- biar navbar muncul pas kita udah login doang --}}
    @if (Auth::check())
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Todo App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <a class="nav-link" href="/dashboard">Home</a>
                <a class="nav-link" href="/data">Data</a>
                <a class="nav-link" href="/create">Create</a>
            </div>
        </div>
        <button class=" btn btn-light">
            <a class="nav-link" href="/logout">Logout</a>
        </button>
        </div>
      </nav>
    @endif
    @yield('content')
    
</body>
</html>