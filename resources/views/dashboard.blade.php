@extends('layout')  

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="container">	
	

            <div class="product-details">
            <h1>Selamat datang</h1>
        
                    <p class="information">Halo {{ auth()->user()->username }} selamat datang di aplikasi Todo App. anda bisa menjelajahi fitur yang tersedia, tekan create untuk membuat list. </p>
                    
                    
                </div>

	
<div class="product-image">
	
	<img src="https://img.freepik.com/free-vector/top-view-hands-holding-books-flat-illustration_74855-17930.jpg?w=740&t=st=1669875161~exp=1669875761~hmac=d1068db0ef2c84725eabac98ed4157b5f93b12eb454347dcf9a6adc7ff1c6741" alt="">
	
    @if (Session::get('addTodo'))
        <div class="alert alert-success">
            {{ Session::get('addTodo') }}
        </div>
    @endif

    Selamat Datang {{ Auth::user()->name }}
@endsection