@extends('layouts.main')
@section('tittel','produk')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Produk Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/produk/tambah" class="btn btn-info mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th> -->
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $pr)
                <tr>
                    <!-- <td class="text-center">
                        <img src="{{ asset('/storage/products/'.$pr->gambar) }}"
                        class="rounded" style="width: 150px">
                    </td> -->
                    <td><p class="text-xs text-secondary mb-0 mx-3">{{ $loop->iteration}}</p></td>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$pr->nama_produk}}</p></h6> </td>
                    <td> <p class="text-xs text-secondary mb-0">Rp. {{ number_format($pr->harga) }}</p> </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$pr->stok}}</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <a href="/produk/{{$pr->id}}/show" class="badge badge-sm bg-gradient-success"> Edit </a>
                      <a href="/produk/{{$pr->id}}/delete" class="badge badge-sm bg-gradient-danger"> Hapus </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@if (session('berhasil'))

<script>
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
</script>

@endif

@endsection
