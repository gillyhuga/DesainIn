@extends('admin.layouts.master')
@section('title', 'Order')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                        <div class="card mb-4">
                            
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Desain</th>
                                                <th>Paket</th>
                                                <th>Status</th>
                                                <th>Deskripsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                            <tbody>
                                                <tr>
                                                <td>1</td>
                                                <td>Udin</td>
                                                <td>udin@gmail.com</td>
                                                <td>Website</td>
                                                <td>Hemat</td>
                                                <td>Proses</td>
                                                <td>Deskripsi pesanan</td>
                                                <td>
                                                <div class="d-grid gap-2 d-md-block">
                                                    <a href=" " class="btn btn-success float-left m-1">Selesai</a>
                                                    <a href=" " class="btn btn-warning float-left m-1">Edit</a>
                                                    <a href=" " class="btn btn-danger float-left m-1">Hapus</a>
                                                    </div>
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection
         
        