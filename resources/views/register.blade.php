@extends('layout')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
   <body class="bg-primary bg-opacity-25">
      <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto rounded shadow bg-white" style="height: 500px;">
               <div class="row">
                <div class="col-md-6">
                    <div class="mt-3 mb-2 text-center">
                      <h2>Register Here!</h1>
                    </div>
                    <form method="POST" action="/register" class="m-5">
                      @csrf
                        <div class="mb-1">
                            <label class="form-label" for="username">Name</label>
                            <input class="form-control" type="text" name="name" id="username">
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="username">Email</label>
                            <input class="form-control" type="text" name="email" id="username">
                          </div>
                        <div class="mb-1">
                          <label class="form-label" for="username">Username</label>
                          <input class="form-control" type="text" name="username" id="username">
                        </div>
                        <div class="mb-1">
                          <label class="form-label" for="password">Password</label>
                          <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <div>
                          <button type="submit" class="form-control btn btn-primary mt-3">Register</button>
                          <div class="bottom-40 end-50">
                            <a href="/login">Back.</a>
                          </div>
                        </div>
                    </form>
                      
                    {{ session('berhasil') }}
                </div>
                <div class="col-md-6 mt-2">
                    <div class="img-hero">
                      <img src="../assets/img/register.png" class="img-fluid img-hero mt-5 p-5" />
                    </div>
                </div>                   
               </div>
            </div>
          </div>
        </div>
      </section>
   </body>
@endsection