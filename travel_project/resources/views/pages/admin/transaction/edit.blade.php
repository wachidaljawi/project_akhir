@extends('layouts.admin')
@section('title','Admin Transaction')
@section('Transaction','active')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card">
            <div class="card header" style="background-color: blue; color:whitesmoke">
                <div class="d-sm-flex align-items-center justify-content-center mb-2">
                  <h1 class="h3 mb-0 text-gray-800">Ubah Transaksi {{ $items->travel_package->title }}</h1>
                </div>
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
                        <form action="{{ route('transaction.update', $items->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">Status</label>
                                <select name="transaction_status" required class="form-control">
                                    <option value="{{ $items->transaction_status }}">Jangan Ubah ({{ $items->transaction_status }})</option>
                                    <option value="IN_CART">In Cart</option>
                                    <option value="PENDING">Pending</option>
                                    <option value="SUCCESS">Success</option>
                                    <option value="CANCEL">Cancel</option>
                                    <option value="FAILED">Failed</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Ubah
                            </button>
                            <a href="/admin/transaction" class="btn btn-outline-warning">Kembali</a>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection