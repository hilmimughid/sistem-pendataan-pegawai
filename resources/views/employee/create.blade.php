@extends('layouts.app')
@section('title', 'Tambah Data Pegawai')
@section('content')
    <div class="container-fluid p-3">
        <h1 class="text-center mb-5">Tambah Data Pegawai</h1>
        <div class="card p-3">
            <div class="card-body">
                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col mb-4">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                                required />
                        </div>
                        <div class="col mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" required>
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select class="form-select" name="divisi" required>
                                <option selected>Pilih Divisi</option>
                                <option value="Produksi">Produksi</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="Marketing">Marketing</option>
                                <option value="IT">IT</option>
                                <option value="HR">HR</option>
                            </select>
                        </div>
                        <div class="col mb-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan" required>
                                <option selected>Pilih Jabatan</option>
                                <option value="Staff">Staff</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Manager">Manager</option>
                                <option value="Direktur">Direktur</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-4">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No. HP"
                                required />
                        </div>
                        <div class="col mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                                required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                required />
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
