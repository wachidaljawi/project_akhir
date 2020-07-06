@extends('layouts.admin')
@section('title','Dashboard')
@section('Dashboard','active')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hotel"></i></span>
        
                <div class="info-box-content">
                  <span class="info-box-text">Paket Travel</span>
                  <span class="info-box-number">
                    {{ $travel_package }}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dollar-sign"></i></span>
        
                <div class="info-box-content">
                  <span class="info-box-text">Transaksi</span>
                  <span class="info-box-number">{{ $transaction }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
        
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
        
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-spinner"></i></span>
        
                <div class="info-box-content">
                  <span class="info-box-text">Pending</span>
                  <span class="info-box-number">{{ $transaction_pending }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-check"></i></span>
        
                <div class="info-box-content">
                  <span class="info-box-text">Sukses</span>
                  <span class="info-box-number">{{ $transaction_success }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
