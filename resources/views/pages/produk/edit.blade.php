@extends('layouts.main')
@section('tittel','pelanggan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Edit Pelanggan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <form action="/produk/{{$produk->id}}/update" class="m-4 ml-5 mr-5" method="POST" autocomplete="off">
                @csrf
                <label class="form-label" for="nama_produk">Nama Produk</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="nama_produk"
                        id=""
                        required
                        value="{{$produk->nama_produk}}"
                        >
                </div>

                <label class="form-label" for="harga">Harga</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="text"
                        class="form-control"
                        name="harga"
                        id=""
                        required
                        value="{{$produk->harga}}"
                        >
                </div>

                <label class="form-label" for="stok">Stok</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        name="stok"
                        id=""
                        class="form-control"
                        cols="30"
                        rows="10"
                        value="{{$produk->stok}}"
                        >
                </div>
                <button type="submit" class="btn btn-info">Tambah</button>
             </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
