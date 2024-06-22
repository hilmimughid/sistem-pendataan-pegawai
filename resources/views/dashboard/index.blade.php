@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="m-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card border border-light-subtle my-3">
                    <h5 class="card-title text-center pt-4 mb-0">Grafik Pegawai Berdasarkan Jenis Kelamin</h5>
                    <div class="card-body">
                        {!! $chartEmployeeGender->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border border-light-subtle my-3">
                    <h5 class="card-title text-center pt-4 mb-0">Grafik Pegawai Berdasarkan Divisi</h5>
                    <div class="card-body">
                        {!! $chartEmployeeDivisions->container() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-sm-11">
                <div class="card border border-light-subtle">
                    <h5 class="card-title text-center pt-4 mb-0">Grafik Pegawai Berdasarkan Jenis Kelamin dan Divisi
                    </h5>
                    <div class="card-body">
                        {!! $chartEmployeeDivisionsGender->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ $chartEmployeeGender->cdn() }}"></script>
    <script src="{{ $chartEmployeeDivisions->cdn() }}"></script>
    <script src="{{ $chartEmployeeDivisionsGender->cdn() }}"></script>
    {{ $chartEmployeeGender->script() }}
    {{ $chartEmployeeDivisions->script() }}
    {{ $chartEmployeeDivisionsGender->script() }}
@endsection
@endsection
