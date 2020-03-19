@extends('layout/main')  <!-- lokasi dimana templatenya -->

@section('title','Daftar Mahasiswa')<!-- untuk keyword 'title' entar diganti dengan tulisan Home!-->
@section('container')     <!-- dengan katakunci container, isi code dibawah ini-->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-4">Daftar Mahasiswa</h1>

            <table class="table"> 
                <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kelas</th>
                <th scope="col">aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Indrajaya</td>
                    <td>12345678</td>
                    <td>RPL 2</td>
                    <td>XI</td>
                    <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection  <!-- penutup sectionnya-->