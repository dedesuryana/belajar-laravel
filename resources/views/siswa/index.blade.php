@extends('layouts.master')
@section('layouts.navigation')
@section('content')
<div class="row">
    <div class="col-6">
        <h1>Form Siswa</h1>
    </div>
    <div class="col-6">
        <svg onclick="hover" class="svg-inline--fa fa-plus float-right" data-toggle="modal" data-target="#exampleModal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="align-middle mr-2 fas fa-fw fa-plus"></i> -->
      </div>
    <table class="table table-hover">
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data_siswa as $siswa)
        <tr>
            <td><a href="/siswa/{{ $siswa->id }}/profile" >{{ $siswa->nama_depan }}</a></td>
            <td>{{ $siswa->nama_belakang }}</td>
            <td>{{ $siswa->jenis_kelamin }}</td>
            <td>{{ $siswa->agama }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td><a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus {{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                </div>
                <div class="modal-body" >
                        <div class="card-body">
                            <form action="/siswa/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Foto Profile</label>
                                <input name="avatar" type="file" class="form-control" id="inputEmail4" placeholder="Nama Depan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" id="inputPassword4" placeholder="Nama Belakang">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">email</label>
                                <input name="email" type="email" class="form-control" id="inputPassword4" placeholder="E-Mail">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="inputAddress">Pilih Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option selected="">Choose...</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="inputAddress">Agama</label>
                            <input name="agama" type="text" class="form-control" id="inputAddress" placeholder="Agama">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
