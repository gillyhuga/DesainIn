@extends('user.layouts.master')
@section('title', 'Home')

@section('layanan-logo')

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 py-7">
      <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-5 text-center mb-3">
            <h2>Pilihan Paket Desain Logo</h2>
            <p>Pilihlah paket desain sesuai kebutuhan dan kantong anda.</p>
          </div>
        </div>
        <div class="row h-100 justify-content-center">
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column justify-content-around mx-auto">
                <div class="text-center pt-5"><img class="img-fluid" src="{{asset('/img/icons/pricing.png')}}" alt="" />
                  <h5 class="my-4">Paket Hemat</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>1 Pilihan Logo
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>7 Hari Proses
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>3x Revisi
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Hak Milik Desain
                  </li>
                  <li class="mb-3"><span class="me-2">
                    <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                      viewBox="0 0 16 16">
                      <path
                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                      </path>
                    </svg></span>Color Guidelines
                </li>
                <li class="mb-3"><span class="me-2">
                  <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                    viewBox="0 0 16 16">
                    <path
                      d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                    </path>
                  </svg></span>Master Files (.ai / .psd / .eps)
              </li>
                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>150.000,-
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
                  <h5 class="my-4">Paket Standard</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>3 Pilihan Logo
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>5 Hari Proses
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>4x Revisi
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>Hak Milik Desain
                  </li>
                  <li class="mb-3"><span class="me-2">
                    <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                      viewBox="0 0 16 16">
                      <path
                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                      </path>
                    </svg></span>Filosofi Logo
                <li class="mb-3"><span class="me-2">
                  <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                    viewBox="0 0 16 16">
                    <path
                      d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                    </path>
                  </svg></span>Master Files (.ai / .psd / .eps)
              </li>
                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>500.000,-
                  </h2>
                  <button class="btn btn-outline-danger rounded-pill" type="submit">Pesan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 pt-4 px-md-2 px-lg-3">
            <div class="card h-100">
              <div class="card-body d-flex flex-column justify-content-around mx-auto">
                <div class="text-center pt-5"><img class="img-fluid" src="{{asset('/img/icons/pricing.png')}}" alt="" />
                  <h5 class="my-4">Paket Premium</h5>
                </div>
                <ul class="list-unstyled">
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>10 Pilihan Logo
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>3 Hari Proses
                  </li>
                  <li class="mb-3"><span class="me-2">
                      <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                        viewBox="0 0 16 16">
                        <path
                          d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                        </path>
                      </svg></span>7x Revisi
                  </li>
                  <li class="mb-3"><span class="me-2">
                    <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                      viewBox="0 0 16 16">
                      <path
                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                      </path>
                    </svg></span>Filosofi Logo
                </li>
                <li class="mb-3"><span class="me-2">
                  <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                    viewBox="0 0 16 16">
                    <path
                      d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                    </path>
                  </svg></span>Master Files (.ai / .psd / .eps)
              </li>
              <li class="mb-3"><span class="me-2">
                <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                  viewBox="0 0 16 16">
                  <path
                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                  </path>
                </svg></span>Branding Identity
            </li>
            <li class="mb-3"><span class="me-2">
              <svg class="bi bi-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2FAB73"
                viewBox="0 0 16 16">
                <path
                  d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                </path>
              </svg></span>Bonus Design Stationery
          </li>
                </ul>
                <div class="text-center my-5">
                  <h2 class="mb-3"><span class="text-900">Rp </span>1.200.000,-
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