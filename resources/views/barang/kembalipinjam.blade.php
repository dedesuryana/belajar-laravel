@extends('layouts.master')

@section('content')
                    <div class="card-body">
                        <form action="/pinjam/{{ $barang->id }}/kembali" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" 
                                id="inputEmail4" placeholder="Nama Barang" value="{{ $barang->nama_barang }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Stok Barang</label>
                                <input name="stok_barang" type="text" class="form-control" 
                                id="inputPassword4" value="{{ $barang->stok_barang }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword5">Jumlah kembali</label>
                                <input name="jml_pinjam" type="number" class="form-control" 
                                id="inputPassword5" placeholder="Masukan Jumlah Barang">
                            </div>
                            {{-- @error('jml_pinjam')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Data</button>
                    </form>
                </div>
@endsection