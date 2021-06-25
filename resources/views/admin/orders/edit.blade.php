@extends('admin.layouts.master')
@section('title', 'Edit Order')

@section('content')
                <main>
                <div class="container-fluid">
                        <h1 class="mt-4">Edit Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Order</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="{{ route('order.update', [$orders->id]) }}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            @method('put')
                            <div class="card-body">
                            <div class="row">
                            <div class="col-8">
                            <div class="form-group">
                            <label for="description">Status Pesanan</label>
                            @if ($orders -> status == 1)
                            <a class="btn btn-warning ">Proses</a>
                            @elseif ($orders -> status == 2)
                            <a class="btn btn-success ">Selesai</a> 
                            @else 
                            <a class="btn btn-danger ">Gagal</a>                
                            @endif
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name')
                            is-invalid @enderror" placeholder="Masukkan Nama" value="{{$orders -> name}}">
                            <small class="text-danger">@error('name') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control @error('image_url')
                            is-invalid @enderror" placeholder="Masukkan Email" value="{{$orders -> email}}" >
                            <small class="text-danger">@error('email') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="category">Kategori Desain</label>
                            <div class="form-group">
                            <select class="form-control" name="category" value="{{$orders -> category}}" >
                            <option value="Logo" {{$orders->category =="Logo" ? 'selected' : '' }}>Desain Logo</option>
                            <option value="Website" {{$orders->category =="Website" ? 'selected' : '' }}>Desain Website</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="package">Pilihan Paket</label>
                            <div class="form-group">
                            <select class="form-control" name="package" value="{{$orders -> package}}" >
                            <option value="Hemat" {{$orders->package =="Hemat" ? 'selected' : '' }}>Paket Hemat</option>
                            <option value="Standard" {{$orders->package =="Standard" ? 'selected' : '' }}>Paket Standard</option>
                            <option value="Premium" {{$orders->package =="Premium" ? 'selected' : '' }}>Paket Standard</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="description">Deskripsi Desain</label>
                            <textarea name="description" class="form-control @error('content') is-invalid @enderror" placeholder="Content" id="exampleFormControlTextarea1" rows="4" > {{$orders -> description}}</textarea>
                            <small class="text-danger">@error('content') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="status">Ubah Status Pesanan</label>
                            <div class="form-group">
                            <select class="form-control" name="status" value="{{$orders -> status}}" >
                            <option value="2" {{$orders->status =="2" ? 'selected' : '' }}>Berhasil</option>
                            <option value="1" {{$orders->status =="1" ? 'selected' : '' }}>Proses</option>
                            <option value="0" {{$orders->status =="0" ? 'selected' : '' }}>Gagal</option>
                            </select>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                            <div class="d-flex justify-content-end">
                            <button type="submit" class="m-1 btn btn-primary">Save</button>
                            </div>
                            </div>
                            </form>
                            </div>
                        </div>

                </main>
                @endsection
