@extends('layout')

@section('content')

<div class="card mt-5" style="width: 18rem;">
    <div class="card-body" style="background-color: #EFF5F5" >
    <form action="/store" method="post" style="max-width: 500px; margin: auto;">
        {{-- menampilkan alert ketika validasi menghasilkan error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- mengirim data ke controller yg ditampung oleh Request $request --}}
        @csrf
        <div class="d-flex flex-column">
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div class="d-flex flex-column">
            <label>Date</label>
            <input type="date" name="date">
        </div>
        <div class="d-flex flex-column">
            <label>Description</label>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
    </form>
    </div>
</div>
@endsection