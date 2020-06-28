@extends('layouts.admin')
@section('title','Admin Travel')
@section('Travel_package','active')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

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
          <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-center">
                <h1 class="h3 mb-0 text-gray-800">Ubah Paket Travel<br></h1>
            </div>
            <div class="d-sm-flex align-items-center justify-content-center mb-2">
                <h1 class="h3 mb-0 text-gray-800">{{ $items->title }}</h1>
            </div>
            
          </div>
          <div class="card-body">
              <form action="{{ route('travel_package.update', $items->id) }}" method="post">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $items->title }}">
                  </div>
                  <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $items->location }}">
                  </div>
                  <div class="form-group">
                      <label for="about">About</label>
                      <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $items->about }}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="featured_event">Featured Event</label>
                      <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ $items->featured_event }}">
                  </div>
                  <div class="form-group">
                      <label for="language">Language</label>
                      <input type="text" class="form-control" name="language" placeholder="Language" value="{{ $items->language }}">
                  </div>
                  <div class="form-group">
                      <label for="foods">Foods</label>
                      <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ $items->foods }}">
                  </div>
                  <div class="form-group">
                      <label for="departure_date">Departure Date</label>
                      <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ $items->departure_date }}">
                  </div>
                  <div class="form-group">
                      <label for="duration">Duration</label>
                      <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $items->duration }}">
                  </div>
                  <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $items->type }}">
                  </div>
                  <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $items->price }}">
                  </div>
                  <button type="submit" class="btn btn-primary">
                      Ubah
                  </button>
                  <a href="/admin/travel_package" class="btn btn-outline-warning">Kembali</a>
              </form>
          </div>
      </div>
  </div>
@endsection