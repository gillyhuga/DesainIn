@extends('user.layouts.master')
@section('title', 'Order')

@section('order')

        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <div class="container">
                    <div class="row flex-center">
                        <div class="col-md-8 col-lg-5 text-center">
                            <h2>Formulir Order</h2>
                            <p>Terimakasih telah mempercayakan desain Anda pada jasa pembuatan desain kami.
                            </p>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                            </ul>
                        </div>
                    </div>

                    
                    <div class="card mb-4 ">
                           
                            <form action="" method="POST" enctype="multipart/form-data">
                            @CSRF
                            <div class="card-body ">
                            <div class="row justify-content-center">
                            @if (session('status'))
                                 <div class="col-8 ">
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                </div>
                            @endif
                           
                            <div class="col-8 ">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name')
                            is-invalid @enderror" placeholder="Masukkan Nama" >
                            <small class="text-danger">@error('name') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control @error('image_url')
                            is-invalid @enderror" placeholder="Masukkan Email"  >
                            <small > *pastikan email benar, karena kami akan menghubungi anda</small>
                            </br>
                            <small class="text-danger">@error('email') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="category">Kategori Desain</label>
                            <div class="form-group">
                            <select class="form-control" name="category"  >
                            <option value="Logo" >Desain Logo</option>
                            <option value="Website" >Desain Website</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="package">Pilihan Paket</label>
                            <div class="form-group">
                            <select class="form-control" name="package"  >
                            <option value="Hemat" >Paket Hemat</option>
                            <option value="Standard" >Paket Standard</option>
                            <option value="Premium" >Paket Premium</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="description">Deskripsi Desain</label>
                            <textarea name="description" class="form-control @error('content') is-invalid @enderror" placeholder="Deskripsi Desain" id="exampleFormControlTextarea1" rows="5" > </textarea>
                            <small class="text-danger">@error('deskripsi') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            
                            </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                            <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-danger rounded-pill order-0">Order</button>
                            </div>
                            </div>
                            </form>
                            </div>
                    

                    </div>

                

        </section>

      
    @endsection


   