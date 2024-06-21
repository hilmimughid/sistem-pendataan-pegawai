@extends('layouts.app')
@section('title', 'Detail Data Pegawai')
@section('content')
    <div class="container-fluid p-3">
        <h1 class="text-center mb-5">Detail Data Pegawai</h1>
        <div class="card p-3">
            <div class="card-body">
                <div class="row my-1">
                    <div class="col-2">
                        <b>Nama</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->nama }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>Divisi</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->divisi }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>Jabatan</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->jabatan }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>Jenis Kelamin</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->jenis_kelamin }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>No. HP</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->no_hp }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>Email</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->email }}</p>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-2">
                        <b>Alamat</b>
                    </div>
                    <div class="col-3">
                        <p>: {{ $employee->alamat }}</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-dark" href="{{ route('pegawai.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
