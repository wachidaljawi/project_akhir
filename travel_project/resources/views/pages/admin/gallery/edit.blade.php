@extends('layouts.admin')
@section('title','Admin Gallery')
@section('Gallery','active')
@section('content')
    <div class="container-fluid">

    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Gallery</h1>
        </div>

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
              <form action="{{ route('gallery.update', $items->id) }}" method="post" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                      <label for="title">Paket Travel</label>
                      <select name="travel_packages_id" required class="form-control">
                          {{-- <option value="{{ $item->travel_packages_id }}">Jangan Ubah</option> --}}
                          @foreach($travel_packages as $travel_package)
                            <option value="{{ $travel_package->id }}" {{old('travel_packages_id') ?? $items->travel_packages_id == $travel_package->id ? 'selected' : ''}}>
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
                      Ubah
                  </button>
                  <a href="/admin/gallery" class="btn btn-outline-warning">Kembali</a>
              </form>
          </div>
        </div>
    </div>
@endsection