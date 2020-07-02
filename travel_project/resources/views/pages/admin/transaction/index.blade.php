@extends('layouts.admin')
@section('title','Admin Transaction')
@section('Transaction','active')
@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>No</th>
                                <th>Travel</th>
                                <th>User</th>
                                <th>Visa</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                                <tr>
                                    <td></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->travel_package->title }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>${{ $item->additional_visa }}</td>
                                    <td>${{ $item->transaction_total }}</td>
                                    <td>{{ $item->transaction_status }}</td>
                                    <td>
                                        <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form action="{{ route('transaction.edit', $item->id) }}" method="GET" class="d-inline">
                                            @csrf
                                            @method('put')
                                            <button class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>  
                                        </form>
                                        <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
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