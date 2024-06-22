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
                            <input type="text" name="nama" class="form-control @error('nama') error-input @enderror"
                                value="{{ $employee->nama }}" />
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select @error('jenis_kelamin') error-input @enderror" name="jenis_kelamin">
                                <option value="Laki-laki" {{ $employee->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="Perempuan" {{ $employee->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select class="form-select @error('divisi') error-input @enderror" name="divisi">
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
                            @error('divisi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col mb-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select @error('jabatan') error-input @enderror" name="jabatan">
                                <option value="Staff" {{ $employee->jabatan === 'Staff' ? 'selected' : '' }}>
                                    Staff</option>
                                <option value="Manager" {{ $employee->jabatan === 'Manager' ? 'selected' : '' }}>
                                    Manager</option>
                                <option value="Direktur" {{ $employee->jabatan === 'Direktur' ? 'selected' : '' }}>
                                    Direktur</option>
                            </select>
                            @error('jabatan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') error-input @enderror"
                                value="{{ $employee->no_hp }}" />
                            @error('no_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') error-input @enderror"
                                value="{{ $employee->email }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') error-input @enderror"
                                value="{{ $employee->alamat }}" />
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-outline-secondary me-2" href="{{ route('pegawai.index') }}"> Batal</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
