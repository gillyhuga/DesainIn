@extends('user.layouts.master')
@section('title', 'Home')

@section('layanan-website')

   <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 py-7">
      <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-5 text-center mb-3">
            <h2>Pilihan Paket Desain Website</h2>
            <p>Pilihlah paket sesuai kebutuhan anda</p>
          </div>
        </div>
        <div class="row h-100 justify-content-center">
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column justify-content-around mx-auto">
                <div class="text-center pt-5"><img class="img-fluid" src="{{asset('/img/icons/pricing.png')}}" alt="" />
                  <h5 class="my-4">Website Toko Online</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Gratis Domain
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Disk Space Mulai 4000 Mb
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>12 Desain Pilihan
                  </li>
                  <li class="mb-3"><span class="me-2">
                    <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                      viewBox="0 0 16 16">
                      <path
                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                      </path>
                    </svg></span>Live Chat
                </li>
                <li class="mb-3"><span class="me-2">
                  <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                    viewBox="0 0 16 16">
                    <path
                      d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                    </path>
                  </svg></span>Fitur Lengkap Toko Online
              </li>


                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>850.000,-
                  </h2>
                  <button class="btn btn-outline-danger rounded-pill" type="submit">Pesan </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column justify-content-around mx-auto">
                <div class="text-center pt-5"><img class="img-fluid" src="{{asset('/img/icons/pricing.png')}}"  alt="" />
                  <h5 class="my-4">Website Perusahaan</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Gratis Domain
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Disk Space Mulai 4000 Mb
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>12 Desain Pilihan
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Fitur Untuk Perusahaan
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Live Chat
                  </li>
                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>1.150.000,-
                  </h2>
                  <button class="btn btn-outline-danger rounded-pill" type="submit">Pesan </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column justify-content-around mx-auto">
                <div class="text-center pt-5"><img class="img-fluid" src="{{asset('/img/icons/pricing.png')}}" alt="" />
                  <h5 class="my-4">Website Sekolah</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Gratis Domain
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Disk Space Mulai 4000 Mb
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>12 Desain Pilihan
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Fitur Untuk Sekolah
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Live Chat
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Masih Banyak Lagi
                  </li>
                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>1.150.000,-
                  </h2>
                  <button class="btn btn-danger hover-top btn-glow rounded-pill border-0" type="submit">Pesan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
      
    @endsection