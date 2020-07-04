@extends('layouts.admin')
@section('title','Admin Transaction')
@section('Transaction','active')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card">
            <div class="card-header"  style="background-color: blue; color:whitesmoke">
                <div class="d-sm-flex align-items-center justify-content-center">
                  <h1 class="h3 mb-0 text-gray-800">Detail Transaksi {{ $items->user->name }}</h1>
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
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $items->id }}</td>
                            </tr>
                            <tr>
                                <th>Paket Travel</th>
                                <td>{{ $items->travel_package->title }}</td>
                            </tr>
                            <tr>
                                <th>Pembeli</th>
                                <td>{{ $items->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Additional Visa</th>
                                <td>$0{{ $items->additional_visa }}</td>
                            </tr>
                            <tr>
                                <th>Total Transaksi</th>
                                <td>${{ $items->transaction_total }}</td>
                            </tr>
                            <tr>
                                <th>Status Transaksi</th>
                                <td>{{ $items->transaction_status }}</td>
                            </tr>
                            <tr>
                                <th>Pembelian</th>
                                <td>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Nationality</th>
                                            <th>Visa</th>
                                            <th>DOE Passport</th>
                                        </tr>
                                        @foreach($items->detail as $detail)
                                            <tr>
                                                <td>{{ $detail->id }}</td>
                                                <td>{{ $detail->username }}</td>
                                                <td>{{ $detail->nationality }}</td>
                                                <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td> 
                                                <td>{{ $detail->doe_passport }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="/admin/transaction" class="btn btn-outline-warning">Kembali</a>
                </div>
            </div>
        </div>
  
      <!-- /.container-fluid -->
@endsection