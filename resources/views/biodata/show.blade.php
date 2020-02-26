@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lihat Data Siswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$biodata->nama}}" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No KTP</label>
                                </div>
                                <div class="col-md-8">
                                <input type="number" class="form-control" value="{{$biodata->noktp}}" name="noktp" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$biodata->alamat}}" name="alamat" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Agama</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$biodata->agama}}" name="agama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" value="{{$biodata->email}}" name="email" readonly  >
                                </div>
                                <div class="col-md-6">
                                    <label for="">Telepon</label>
                                </div>
                                <div class="col-md-8">
                                <input type="number" class="form-control" value="{{$biodata->telepon}}" name="telepon" readonly>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
