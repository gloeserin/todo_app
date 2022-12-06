@extends('layout')

@section('content')
<div class="card mt-5" style="width: 18rem;">
 <div class="card-body" style="background-color: #EFF5F5" >
    <form action="/update/{{$todo['id']}}" method="post" style="max-width: 500px; margin: auto;">
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
        {{-- karena attribute method pada tag form cmn bisa GET/POST sedangkan buat update data itu pake method PATCH, jadi method="post" di form di timpa sama method patch ini --}}
        @method('PATCH')
        <fieldset>
        <div class="d-flex flex-column">
            <label>Title</label>
            {{-- attribute value berfungsi untuk menampilkan data di inputnya. data yang ditampilin merupakan data yang diambil di controller dan dikirim lewat compact tadi --}}
            <input placeholder="Input the title" type="text" name="title" value="{{$todo['title']}}" tabindex="1" required autofocus>
        </div>
        </fieldset>
        <fieldset>
        <div class="d-flex flex-column">
            <label>Date</label>
            <input type="date" name="date" value="{{$todo['date']}}" tabindex="2" required autofocus>
        </div>
        </fieldset>
        <fieldset>
        <div class="d-flex flex-column">
            <label>Description</label>
            {{-- kenapa textarea gapunya attribute value? karena textarea bukan termasuk tag input/select dan dia punya penutup tag, jadi buat nampilinnya langsung tanpa attribute value (sebelum penutup tag textarea) --}}
            <textarea placeholder="Write down your description" name="description" cols="30" rows="10" tabindex="3" required>{{$todo['description']}}</textarea>
        </div>
        </fieldset>
        <br>
        <fieldset>
        <button type="submit" class="btn btn-primary">Kirim</button>
        </fieldset>
    </form>
 </div>
</div>
@endsection