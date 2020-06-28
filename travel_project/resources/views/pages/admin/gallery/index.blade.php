@extends('layouts.admin')
@section('title','Admin Gallery')
@section('Gallery','active')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <div class="card ml-2">
                    <div class="card-header">
                        
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="{{ route('gallery.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-2">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Travel</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->travel_package->title }}</td>
                                        <td>
                                            <img src="{{ Storage::url($item->image) }}" alt="" style="width: 200px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <form action="{{ route('gallery.edit', $item->id) }}" method="GET" class="d-inline">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
        
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection