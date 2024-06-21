@extends('layouts.app')
@section('title', 'Data Pegawai')
@section('content')
    <div class="m-3">
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
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#update_pegawai_modal{{ $employee->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        {{-- Modal Konfirmasi Hapus --}}
                                        <div class="modal" tabindex="-1" id="update_pegawai_modal{{ $employee->id }}">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Peringatan!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Konfirmasi menghapus data pegawai
                                                            {{ $employee->nama }}
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('pegawai.destroy', $employee->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-outline-secondary me-2"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Yakin</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
