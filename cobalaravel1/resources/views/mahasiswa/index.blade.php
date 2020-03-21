@extends('layout/main')
@section('title'.'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Daftar Mahasiswa</h1>
            
            <table class="table">
                <thead calss="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">NPR</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($mahasiswa as $mhs)
                    <tr>
                    <th scope="row">{{$loop->iteration }}</th>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->npr}}</td>
                    <td>{{$mhs->kelas}}</td>
                    <td>{{$mhs->jurusan}}</td>

                    <td>
                        <a href="" class="badge badge-succes">Edit</a>
                        <a href="" class="badge badge-danger">Deletet</a>
                        </tr>
                @endforeach
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
