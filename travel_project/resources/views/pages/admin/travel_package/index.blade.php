@extends('layouts.admin')
@section('title','Admin Travel')
@section('Travel_package','active')
@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ml-3">Paket Travel</h1>
              <a href="{{ route('travel_package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-3">
                  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
              </a>
        </div>
        @if(session()->has('pesan'))
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session()->get('pesan') }}
            </div>
        @endif
          <!-- Content Row -->
          {{-- <div class="row"> --}}
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
                                      <a href="{{ route('travel_package.edit', $item->id) }}" class="btn btn-info">
                                          <i class="fa fa-pencil-alt"></i>
                                      </a>
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
          {{-- </div> --}}
    </div>
@endsection