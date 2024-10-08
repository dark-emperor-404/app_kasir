@extends('layouts.main')
@section('tittel','pelanggan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Pelanggan Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/pelanggan/tambah" class="btn btn-info mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pelanggan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telepon</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $p)
                <tr>
                    <td><p class="text-xs text-secondary mb-0 mx-3">{{ $loop->iteration}}</p></td>
                    <td> <h6><p class="text-xs text-secondary mb-0 mx-3">{{$p->nama_pelanggan}}</p></h6> </td>
                    <td> <p class="text-xs text-secondary mb-0">{{$p->alamat}}</p> </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$p->no_tlp}}</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <a href="/pelanggan/{{$p->id}}/show" class="badge badge-sm bg-gradient-success"> Edit </a>
                      <a href="/pelanggan/{{$p->id}}/delete" class="badge badge-sm bg-gradient-danger"> Hapus </a>
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

@if (session('Berhasil'))

<script>
  Swal.fire({
  title: "Berhasil!",
  text: "session('Berhasil')",
  icon: "success"
});
</script>

@endif

@endsection
