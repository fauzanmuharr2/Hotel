@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header"><center><b>Data Pendaftaran Hotel Asoy</b></center></div>
                <div class="card-body">
                    <a href="{{route('biodata.create')}}"class="btn btn-outline-light float-right"><b>Pendaftaran(+)</b></a>
                    <table class="table">
                        <thead>
                            <th>Nama</th>
                            <th>No KTP</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($biodata as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->noktp}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->telepon}}</td>
                                {{-- <td> {{$item->hobi}} </td> --}}
                            <form action="{{route('biodata.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary" href="{{route('biodata.show', $item->id)}}">Lihat</a>|
                                <a class="btn btn-warning" href="{{route('biodata.edit', $item->id)}}">Edit</a>|
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </tr>
                                </td>
                            </form>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
