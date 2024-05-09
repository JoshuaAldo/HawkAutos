@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{url('home')}}" class="btn btn-primary">Back</a>
      </div>
      <div class="col-md-12 mt-3">
        <div class="card">
          <div class="card-header">
            <h3>{{$barang->nama_barang}}</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="{{url('uploads')}}/{{$barang->gambar}}" class="rounded mx-auto d-block" width="300" alt="">
              </div>
              <div class="col-md-6 mt-4">
                <h4>{{$barang->nama_barang}}</h4> 
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Harga</td>
                      <td>:</td>
                      <td>Rp{{number_format($barang->harga)}}</td>
                    </tr>
                    <tr>
                      <td>Stok</td>
                      <td>:</td>
                      <td>{{$barang->stok}}</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>:</td>
                      <td>{{$barang->keterangan}}</td>
                    </tr>
                    
                    <tr>
                      <td>Jumlah Order</td>
                      <td>:</td>
                     <td>
                        <form action="{{url('pesan')}}/{{$barang->id}}" method ="post">
                        @csrf
                        <input type="text" name="jumlah_pesan" class="form-control" require="">
                        <button type="submit" class="btn btn-primary mt-3">
                        Confirm Order
                      </button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
