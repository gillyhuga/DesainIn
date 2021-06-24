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
                    
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Picture</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>

                                    
                                            <tr>
                                                
                                            
                                                
                                                <form class="float-left m-1"
                                                action="/admin/portfolios/{{$portofolio -> id}}" method="POST">
                                                @method('PUT')       
                                                @csrf
                                                <td><input type="text" name="title" value="{{$portofolio -> title}}"></td>
                                                <td><input type="text" name="image_url" value="{{$portofolio -> image_url}}"></td>
                                                <td><input type="text" name="status" value="{{$portofolio -> status}}"></td>
                                                <td><button type="submit" class="btn btn-primary">Save</a></dt>
                                                
                                                
                                            </tr>
                                            </form>
                                            
                                            
                                        
                                        </tbody>
                                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection
