@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pendaftaran</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('biodata.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for=""><b>Nama</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>No KTP</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="noktp" required>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Alamat</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="alamat" required>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Agama</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="agama" required>
                                </div>

                                <div class="col-md-6">
                                    <label for=""><b>Email</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="col-md-6">
                                    <label for=""><b>Telepon</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="telepon" required>
                                </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--
@push('script')
<script>
    $(document).ready(function()
    {
        $('.pilih-hobi').select2();
    });
</script>
@endpush --}}
