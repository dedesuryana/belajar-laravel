@extends('layouts.master')

@section('layouts.navigation')
@section('content')
<main class="main pt-4">
    <div class="card-header">
        <h1>Daftar Barang</h1>
    </div>
    <div class="intro">
      <div class="container-fluid">
        <div class="row">
          @foreach ($barang as $a)
          <div class="col-md-4">
            <a href="/pinjam/{{ $a->id }}">
            <img style="height: 200px;" class="card-img rounded-circle" src="{{ asset('images/'.$a->avatar) }}">
          </a>
              Published on : {{ $a->created_at ->diffForHumans()}}
              <strong><h3 >{{ $a->nama_barang }}</h3></strong>
              <strong><h4 >{{ $a->stok_barang }} Barang</h4></strong>
        </div>
        @endforeach
        </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
      {{ $barang->links() }}
        </ul>
      </nav>
      </div>
    </div>
  </main>
@stop