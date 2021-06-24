@extends('admin.layouts.master')
@section('title', 'Portfolio')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <a href="/admin/portfolios/create" type="button" class="btn btn-success">
                            <i class="fas fa-plus"></i>
                                Tambahkan Data
                            </a>
                            </div>
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                         @foreach($portofolios as $portofolio)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$portofolio -> title}}</td>
                                                <td>
                                                <a href="{{$portofolio -> image_url}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
                                                </td>
                                                <td>
                                                    @if ($portofolio -> status === 0)
                                                        <span class="badge badge-warning">Draft</span>
                                                    @else
                                                        <span class="badge badge-success">Published</span>
                                                    @endif
                                                </td>
                       
                                                <td>
                                                
                                                <form class="float-left m-1" action="/admin/portfolios/{{$portofolio->id}}" method="POST">
                                                @method('PUT')  
                                                        @csrf
                                                        @if ($portofolio -> status === 0)
                                                        <input type="hidden" name="status" value="1" />
                                                        <button type="submit" class="btn btn-success ">Publish</button>
                                                        @else
                                                        <input type="hidden" name="status" value="0" />
                                                        <button type="submit" class="btn btn-warning ">Draft</button>
                                                        @endif
                                                </form>
                                                <a href="/admin/portfolios/{{$portofolio->id}}/edit"
                                                class="btn btn-primary float-left m-1">Edit</a>
                                                <form class="float-left m-1"
                                                action="/admin/portfolios/{{$portofolio->id}}" method="POST">
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
         
        