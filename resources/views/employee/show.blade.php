@extends('layouts.app')
@section('title', 'Detail Data Pegawai')
@section('content')
    <div class="container-fluid p-3">
        <h1 class="text-center mb-5">Detail Data Pegawai</h1>
        <div class="card p-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr>
                            <td class="col-2"><b>Nama</b></td>
                            <td>: {{ $employee->nama }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>Divisi</b></td>
                            <td>: {{ $employee->divisi }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>Jabatan</b></td>
                            <td>: {{ $employee->jabatan }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>Jenis Kelamin</b></td>
                            <td>: {{ $employee->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>No. HP</b></td>
                            <td>: {{ $employee->no_hp }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>Email</b></td>
                            <td>: {{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <td class="col-2"><b>Alamat</b></td>
                            <td>: {{ $employee->alamat }}</td>
                        </tr>
                    </table>
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-secondary" href="{{ route('pegawai.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
