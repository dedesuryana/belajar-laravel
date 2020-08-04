@extends('layouts.master')
@section('layouts.navigation')
@section('content')
<div class="row">
    <div class="col-6">
        <h1>Form Barang</h1>
    </div>
    @if(auth()->user()->role == 'admin')
    <div class="col-6">
        <svg onclick="hover" class="svg-inline--fa fa-plus float-right" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="align-middle mr-2 fas fa-fw fa-plus"></i> -->
      </div>
    @endif
    <table class="table table-hover">
        <tr>
            <th>Nama Barang</th>
            <th>Stok Barang</th>
            <th>Di Input Pada</th>
            <th>Aksi</th>
        </tr>
        @foreach ($barang as $a)
        <tr>
            <td>{{ $a->nama_barang }}</td>
            <td>{{ $a->stok_barang }}</td>
            <td>{{ $a->created_at->format("d F, Y") }}</td>
            <td>
                <a href="/pinjam/{{ $a->id }}" class="btn btn-warning btn-sm">Pinjam Barang</a>
                @if(auth()->user()->role == 'admin')
                <a href="/barang/{{ $a->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus {{ $a->nama_barang }}')">Delete</a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>

{{-- Ini Tambah Siswa Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                </div>
                <div class="modal-body" >
                        <div class="card-body">
                            <form action="/barang/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Foto Profile</label>
                                <input name="avatar" type="file" class="form-control" id="inputEmail4" placeholder="Nama Depan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Jumlah Barang</label>
                                <input name="jumlah_barang" type="text" class="form-control" id="inputPassword4" placeholder="Nama Belakang">
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
