@extends('layouts.master')
@section('layouts.navigation')
@section('content')
<div class="row">
    <div class="col-6">
        <h1>Form Barang</h1>
    </div>
    <table class="table table-hover">
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Jumlah Pinjam</th>
            <th>Total Barang</th>
            <th>Nama Peminjam</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($tampil as $a)
        @if(auth()->user()->id == $a->id_user)
        <tr>
            <td>{{ $a->nama_barang }}</td>
            <td>{{ $a->jumlah_barang }}</td>
            <td>{{ $a->jumlah_pinjam }}</td>
            <td>{{ $a->stok_barang }}</td>
            <td>{{ $a->name }}</td>
            <td>{{ $a->email }}</td>
            <td>
                <a href="/pinjam/{{ $a->id_barang }}/kembalikan">
                <svg class="svg-inline--fa fa-sign-in-alt fa-w-16 align-middle mr-2 fa-fw" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>Kembalikan
                </a>
            </td>
        @endif
        @endforeach
        {{-- @foreach($tampil as $data)
            <td>
                <a href="/pinjam/{{ $data->id_ }}/delete">delete</a>
            </td>
        @endforeach --}}
            </tr>
    </table>
    <a href="/dashboard" class="btn btn-info col-md-12">Dashboard Barang</a>
</div>

{{-- Ini Tambah Siswa Modal --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> </h5>
                </div>
                <div class="modal-body" >
                        <div class="card-body">
                            <form action="/pinjam/" method="post">
                            @csrf
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Barang</label>
                                <input value="" name="nama_barang" type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan">
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
        </div> --}}
    </div>
</div>
@endsection
