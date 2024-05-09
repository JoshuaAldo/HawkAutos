@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{url('home')}}" class="btn btn-primary">Back</a>
      </div>
      <div class="col-md-12 mt-3">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3>Check out</h3>

            </div>
            <div class="card-body">
              <table class="table table-bordered">    
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Type Mobil</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  @foreach($pesanan_details as $pesanan_detail)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$pesanan_detail->barang->nama_barang}}</td>
                    <td>{{$pesanan_detail->jumlah}} Unit</td>
                    <td>Rp{{number_format($pesanan_detail->barang->harga)}}</td>
                    <td>Rp{{number_format($pesanan_detail->jumlah_harga)}}</td>
                    <td>
                      <form action="{{url('check-out')}}/{{$pesanan_detail->id}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  <tr>
                    <td colspan="4" align="right"><strong>Total Harga</strong></td>
                    <td><strong>Rp{{number_format($pesanan->jumlah_harga)}}</strong></td>
                    <td><a href="{{url('konfirmasi-check-out')}}" class="btn btn-success">Check-Out</a>
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
