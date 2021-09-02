@extends('templates.master')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>User</h4>
          </div>
          <div class="card-body">
           {{Auth::user()->nama_lengkap}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-home"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Data Pengaduan</h4>
          </div>
          <div class="card-body">
           
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Data Oder</h4>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Data User</h4>
          </div>
          <div class="card-body">
           
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection