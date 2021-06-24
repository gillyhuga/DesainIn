@extends('admin.layouts.master')
@section('title', 'Movie')

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
                                                <td>{{$portofolio -> id}}</td>
                                                <td>{{$portofolio -> title}}</td>
                                                <td>{{$portofolio -> image_url}}</td>
                                                <td>{{$portofolio -> status}}</td>
                                                <td>
                                                <a href=" "
                                                class="btn btn-primary float-left m-1">Draft</a>
                                                <a href="/admin/portfolios/{{$portofolio->id}}/edit"
                                                class="btn btn-warning float-left m-1">Edit</a>
                                                <form class="float-left m-1"
                                                action="/admin/portfolios/{{$portofolio->id}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</a>
                                                </form>
                                                </td>

                                                <td>
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
         
        