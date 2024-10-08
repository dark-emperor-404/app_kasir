@extends('layouts.main')
@section('tittel','penjualan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Penjualan Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/penjualan/tambah" class="btn btn-info mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th> -->
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggan Penjualan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Harga</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Pelanggan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id User</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $pj)
                <tr>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$loop->iteration}}</p></h6> </td>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$pj->created_at}}</p></h6> </td>
                    <td> <p class="text-xs text-secondary mb-0">Rp. {{ number_format($pj->total_harga) }}</p> </td>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$pj->id_pelanggan}}</p></h6> </td>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$pj->id_user}}</p></h6> </td>
                    <td class="align-middle text-center text-sm">
                      <a href="/penjualan/{{$pj->id}}/show" class="badge badge-sm bg-gradient-success"> Edit </a>
                      <a href="/penjualan/{{$pj->id}}/delete" class="badge badge-sm bg-gradient-danger"> Hapus </a>
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
