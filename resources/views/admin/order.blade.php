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
                                                <th>Deskripsi Desain</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                            <tbody>
                                            @foreach ($orders as $order)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->category }}</td>
                                            <td>{{ $order->package }}</td>
                                            <td>
                                            @if($order->status == 0)
                                            <span class="badge badge-danger">Gagal</span>
                                            @elseif($order->status == 1)
                                            <span class="badge badge-warning">Proses</span>
                                            @else
                                            <span class="badge badge-success">Success</span>
                                            @endif
                                            </td>
                                            <td>{{ $order->description }}</td>
                                            <td>
                                            
                                            <a href="{{ route('order.edit', [$order->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                            <form class="float-left m-1"
                                            action="{{ route('order.destroy', [$order->id]) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</a>
                                            </form>
                                            </td>
                                            </tr>
                                            @endforeach 
                                            
                                            </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection
         
        