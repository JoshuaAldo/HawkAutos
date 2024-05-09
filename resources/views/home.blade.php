@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class ="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width = "400" alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="{{ url('uploads')}}/{{ $barang->gambar }}" width="300" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang}}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp{{ number_format($barang->harga) }} <br>
                    <strong>Stok :</strong> {{ $barang->stok }} <br>
                    <strong>Keterangan : </strong><br>{{$barang->keterangan}}
                </p>
                <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary">Order</a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
