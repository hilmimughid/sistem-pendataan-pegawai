@extends('layouts.app')
@section('title', 'Edit Data Pegawai')
@section('content')
    <div class="container-fluid p-3">
        <h1 class="text-center mb-5">Edit Data Pegawai</h1>
        <div class="card p-3">
            <div class="card-body">
                <form action="{{ route('pegawai.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-4">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $employee->nama }}" />
                        </div>
                        <div class="col mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin">
                                <option value="Laki-laki" {{ $employee->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="Perempuan" {{ $employee->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select class="form-select" name="divisi">
                                <option value="Produksi" {{ $employee->divisi === 'Produksi' ? 'selected' : '' }}>
                                    Produksi</option>
                                <option value="Keuangan" {{ $employee->divisi === 'Keuangan' ? 'selected' : '' }}>
                                    Keuangan</option>
                                <option value="Marketing" {{ $employee->divisi === 'Marketing' ? 'selected' : '' }}>
                                    Marketing</option>
                                <option value="IT" {{ $employee->divisi === 'IT' ? 'selected' : '' }}>
                                    IT</option>
                                <option value="HR" {{ $employee->divisi === 'HR' ? 'selected' : '' }}>
                                    HR</option>
                            </select>
                        </div>
                        <div class="col mb-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan">
                                <option value="Staff" {{ $employee->jabatan === 'Staff' ? 'selected' : '' }}>
                                    Staff</option>
                                <option value="Supervisor" {{ $employee->jabatan === 'Supervisor' ? 'selected' : '' }}>
                                    Supervisor</option>
                                <option value="Manager" {{ $employee->jabatan === 'Manager' ? 'selected' : '' }}>
                                    Manager</option>
                                <option value="Direktur" {{ $employee->jabatan === 'Direktur' ? 'selected' : '' }}>
                                    Direktur</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" name="no_hp" class="form-control" value="{{ $employee->no_hp }}" />
                        </div>
                        <div class="col mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $employee->alamat }}" />
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-dark me-2" href="{{ route('pegawai.index') }}"> Batal</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
