<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <body class="bg-primary bg-opacity-25">
      <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto rounded shadow bg-white">
               <div class="row">
                <div class="col-md-6">
                    <div class="m-5 text-center">
                      <h2>Welcome!</h2>
                    </div>
                      @if (session('successRegister'))
                      <p style="color: red">{{ session('successRegister') }}</p>
                      @endif
                  <form action="{{ route('Login-baru') }}" class="m-5" method="POST">
                    @csrf
                          <div class="mb-3">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" class="form-control" type="text" id="username">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control" type="password" id="password">
                          </div>
                          <div class="row mb-3">
                              <div class="col-6">
                                <div class="form-check">
                                    {{-- <input class="form-check-input" type="checkbox" id="remember-me"> --}}
                                    {{-- <label class="form-check-label" for="remember-me">Remember Me</label> --}}
                                </div>
                              </div> 
                            <div>
                            <button type="submit" class="form-control btn btn-primary mt-2">Login</button>
                          </div>
                              <div class="col-6">
                                <div>
                                  Don't have an account?
                                </div> 
                                <div class="bottom-40 end-50">
                                  <a href="/register">Signup here.</a>
                                </div> 
                               </div>

                          </div>


                          @if(session('error'))
                            {{ session('error') }}
                          @endif

                          @if(session('isLogin'))
                            {{ session('isLogin') }}
                          @endif
                      </form>
                  </div>
                  <div class="col-md-6">
                      <div>
                        <img src="../assets/img/login.png" class="img-fluid p-5" />
                      </div>
                  </div>                   
                 </div>
              </div>
            </div>
          </div>
        </section>
    </body> 