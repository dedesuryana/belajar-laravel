@extends('auths.master')
<section class="bg-home rtl-personal-hero bg-light d-flex align-items-center" style="background:url('assets/images/personal/bg01.png') center center" id="home">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-8 col-md-9">
              <div class="title-heading mt-4">
                  @foreach ($siswa as $a)
                  <h1 class="display-3 font-weight-bold mb-3">Aku Di Sini Untuk Memudahkan <br> <span class="element" data-elements="{{ $a->interaksi }}, {{ $a->interaksidua }}, {{ $a->interaksitiga }}"></span><span class="typed-cursor"></span> </h1>
                  <p class="para-desc text-muted">Inventaris Barang & Peminjaman SMK Mahaputra Cerdas Utama.</p>
                  <div class="mt-4 pt-2">
                  @endforeach
                      <a href="/login" class="btn btn-outline-primary mt-2 mouse-down"></i> Login</a>
                      <a href="index-2.html" data-toggle="modal" data-target="#LoginForm" class="btn btn-primary mt-2 mr-2 mouse-down"> Register </a>
                    </div>
              </div>
          </div><!--end col-->
                <!-- Modal Content Start -->
                <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content rounded shadow border-0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> Form Register </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                              <div class="p-4">
                                  <form action="/siswa/create" method="post" enctype="multipart/form-data">
                                    @csrf
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group position-relative">
                                            <label for="inputEmail4">Foto Profile</label>
                                            <input name="avatar" type="file" class="form-control" id="inputEmail4" placeholder="Nama Depan">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                              <div class="form-group position-relative">
                                                  <label> Nama Depan<span class="text-danger">*</span></label>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                  <input name="nama_depan" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                              </div>
                                          </div><!--end col-->
                                          <div class="col-md-6">
                                              <div class="form-group position-relative">
                                                  <label>Nama Belakang <span class="text-danger">*</span></label>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                  <input name="nama_belakang" id="name" type="text" class="form-control pl-5" placeholder="Last Name :">
                                              </div> 
                                          </div><!--end col-->
                                          <div class="col-md-12">
                                              <div class="form-group position-relative">
                                                  <label> E-Mail <span class="text-danger">*</span></label>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                  <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                              </div> 
                                          </div><!--end col-->
                                          <div class="form-group col-md-12">
                                            <label> Pilih Jenis Kelamin <span class="text-danger">*</span></label>
                                            <select name="jenis_kelamin" class="form-control custom-select">
                                              <option selected="">Choose...</option>
                                              <option value="L">Laki-Laki</option>
                                              <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                          <div class="col-md-12">
                                              <div class="form-group position-relative">
                                                  <label>Agama</label>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book fea icon-sm icons"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                  <input name="agama" id="agama" class="form-control pl-5" placeholder="Your Religion :">
                                              </div>                                                                               
                                          </div><!--end col-->
                                          <div class="col-md-12">
                                              <div class="form-group position-relative">
                                                  <label>Alamat</label>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fea icon-sm icons"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                  <textarea name="alamat" id="alamat" rows="4" class="form-control pl-5" placeholder="Your Address :"></textarea>
                                              </div>
                                          </div>
                                          </div><!--end row-->
                                          <div class="row">
                                              <div class="col-sm-12">
                                                  <input type="submit" id="submit" name="send" class="btn btn-primary" value="Submit">
                                              </div><!--end col-->
                                          </div><!--end row-->
                                      </form><!--end form-->
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Content End -->
            </div>
        </div>
      </div><!--end row-->
  </div><!--end container-->
</section>
