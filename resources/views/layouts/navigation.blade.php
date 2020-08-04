<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
      <div class="container">

        <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
          <ul class="navbar-nav mr-auto">
            @if(auth()->user()->role == 'admin')
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Siswa</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/siswa">Siswa</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Barang</a>
              <div class="dropdown-menu" aria-labelledby="dropdown02">
                <a class="dropdown-item" href="/barang">Daftar Barang</a>
              </div>
            </li>
            @endif
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Pengembalian Barang</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="/historypinjam">History Barang</a>
                <a class="dropdown-item" href="doc-buttons.html">Pengembalian Barang</a>
              </div>
            </li>
          </ul>
        </div>

        <a class="navbar-brand mx-auto order-1 order-md-3" href="/dashboard">Inventøry Barang</a>

        <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi. {{ auth()->user()->name }} : {{ auth()->user()->email }}</a>
              <div class="dropdown-menu" aria-labelledby="dropdown4">
                <a class="dropdown-item" href="/logout">Logout</a>
                <a class="dropdown-item" href="/siswa/{{auth()->user()->id  }}/profile">Profil</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="page-about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="page-contact.html">Contact</a>
            </li>
          </ul>
          @if(auth()->user()->role == 'admin')
          <form class="form-inline" role="search" action="/siswa" method="GET">
            <input name="cari" class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
          </form>
          @endif
          @if(auth()->user()->role == 'siswa')
          <form class="form-inline" role="search" action="/dashboard" method="GET">
            <input name="cari" class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
          </form>
          @endif
        </div>
      </div>
    </nav>
  </header>