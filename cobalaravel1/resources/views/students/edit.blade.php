@extends('layout/main')
@section('title'.'Form Ubah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah DataMahasiswa</h1>

            <form method="POST" action="/students/{{ $student->id }}"> 
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">

                     @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                </div>

           
                <div class="form-group">
                        <label for="npr">nrp</label>
                        <input type="text" class="form-control @error('npr') is-invalid @enderror" id="npr" placeholder="Masukkan nrp" name="npr" value="{{$student->npr}}">

                        @error('npr')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                </div>
            
                <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{$student->email}}">
                    </div>
                
                <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{$student->jurusan}}">
                    </div>
                    
                <button type="submit" class="btn btn-primary">Ubah data</button>
            </form>
            

        </div>
    </div>
</div>
@endsection
