@extends('layouts.app')
@section('title', 'Data Pegawai')
@section('content')
    <div class="container-fluid p-3">
        <h1 class="text-center mb-5">Data Pegawai</h1>
        <div class="card p-3">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-0">
                    <form action="{{ route('pegawai.index') }}" method="GET" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari">
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <a class="btn btn-success ms-2" href="{{ route('pegawai.create') }}">Tambah</a>
                </div>
                <div class="pt-4 table-responsive text-nowrap">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th>Nama</th>
                                <th class="col-2">Divisi</th>
                                <th class="col-2">Jabatan</th>
                                <th class="col-2">Jenis Kelamin</th>
                                <th class="col-1">Detail</th>
                                <th class="col-1">Edit</th>
                                <th class="col-1">Hapus</th>
                            </tr>
                        </thead>
                        @foreach ($employees as $employee)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->nama }}</td>
                                    <td>{{ $employee->divisi }}</td>
                                    <td>{{ $employee->jabatan }}</td>
                                    <td>{{ $employee->jenis_kelamin }}</td>
                                    <td>
                                        {{-- Button Show --}}
                                        <a class="btn btn-primary" href="{{ route('pegawai.show', $employee->id) }}">
                                            <i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    <td>
                                        {{-- Button  Edit --}}
                                        <a class="btn btn-warning" href="{{ route('pegawai.edit', $employee->id) }}">
                                            <i class="fa-solid fa-pen-to-square text-white"></i></a>
                                    </td>
                                    <td>
                                        {{-- Button Delete --}}
                                        <form action="{{ route('pegawai.destroy', $employee->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="mt-4 d-flex justify-content-end">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
