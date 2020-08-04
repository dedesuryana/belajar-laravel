@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-6">
      <h1>Edit Siswa</h1>
  </div>
</div>
      <div class="card-body">
        <form action="/siswa/{{ $siswa->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Foto Profile</label>
            <input name="avatar" type="file" class="form-control" id="inputEmail4" placeholder="Nama Depan">
        </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="inputPassword4" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
          </div>
        </div>
        <div class="form-group">
        <label for="inputAddress">Pilih Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" value="{{ $siswa->jenis_kelamin }}">
            <option value="L" @if($siswa->jenis_kelamin == 'L' ) selected @endif>Laki-Laki</option>
            <option value="P" @if($siswa->jenis_kelamin == 'P' ) selected @endif>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress">Agama</label>
          <input name="agama" type="text" class="form-control" id="inputAddress" placeholder="Agama" value="{{ $siswa->agama }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{ $siswa->alamat }}</textarea>
          </div>
    </div>
    <div class="modal-footer">
        <a href="/siswa" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
</div>
@endsection
