@if(session('sukses'))
  <div class="container">
      <div class="alert alert-success" role="alert">
          {{ session('sukses') }}<button type="button" class="close" data-dismiss="alert"><i class="fab fa-closed-captioning"></i></button>
      </div>
  </div>
@endif

@if(session('hapus'))
  <div class="container">
    <div class="alert alert-danger" role="alert">
      {{ session('hapus') }}<button type="button" class="close" data-dismiss="alert"><i class="fab fa-closed-captioning"></i></button>
    </div>
  </div>
@endif
