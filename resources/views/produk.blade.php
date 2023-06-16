@extends('layout.main')
  @section('mainlayout')
  <div class="container1">
    <div class="row flex-row">
      @foreach ($produk as $item)
        <div class="col-sm-4 text-center"> <!-- Menambahkan kelas "text-center" di sini -->
          <div class="card">
            <center><img src="{{ asset('img/'.$item->gambar) }}" class="card-img-top w-50" alt="..."></center>
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama_produk }}</h5>
              <p class="card-text">Rp{{ $item->harga }}</p>
              <a href="#" class="btn btn-primary">beli</a>
            </div>
          </div>
        </div>
      @endforeach        
    </div>
  </div>
  
  
@endsection
