@extends('layouts.admin')
@section('title','Admin Travel')
@section('Travel_package','active')
@section('content')
    <div class="container">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <a href="{{ route('travel_package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
                            </a>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered nowrap" id="dataTable">
                                <thead>
                                  <tr>
                                      <th></th>
                                      <th>No</th>
                                      <th>Title</th>
                                      <th>Location</th>
                                      <th>Duration</th>
                                      <th>Departure Date</th>
                                      <th>Type</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @forelse($items as $item)
                                      <tr>
                                          <td></td>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>{{ $item->title }}</td>
                                          <td>{{ $item->location }}</td>
                                          <td>{{ $item->duration }}</td>
                                          <td>{{ $item->departure_date }}</td>
                                          <td>{{ $item->type }}</td>
                                        <td>
                                            <form action="{{ route('travel_package.edit', $item->id) }}" method="GET" class="d-inline">
                                                  @csrf
                                                  @method('put')
                                                  <button class="btn btn-info">
                                                      <i class="fa fa-pencil-alt"></i>
                                                  </button>  
                                            </form>
                                            <form action="{{ route('travel_package.destroy', $item->id) }}" method="post" class="d-inline">
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
@endsection