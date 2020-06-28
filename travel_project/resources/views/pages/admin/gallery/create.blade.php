@extends('layouts.admin')
@section('title','Admin Gallery')
@section('Gallery','active')
@section('content')
<div class="container-fluid">

    <!-- Content Row -->
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="card shadow">
          <div class="card-body">
              <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="title">Paket Travel</label>
                      <select name="travel_packages_id" required class="form-control">
                          {{-- <option value="">Pilih Paket Travel</option> --}}
                          @foreach($travel_packages as $travel_package)
                              <option value="{{ $travel_package->id }}">
                                  {{ $travel_package->title }}
                              </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" class="form-control" name="image" placeholder="Image" >
                  </div>
                  <button type="submit" class="btn btn-primary">
                      Simpan
                  </button>
                  <a href="/admin/gallery" class="btn btn-outline-warning">Kembali</a>
              </form>
          </div>
      </div>
  </div>
@endsection