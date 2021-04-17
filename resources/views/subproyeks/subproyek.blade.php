@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="card-body">
    <ul class="nav nav-pills">
        <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Subprojek</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i>Tim</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cog"></i> Setting</a>
        </li>
    </ul>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-primary">
           {{session('sukses')}}
        </div>
        @endif
            <a href="subproyek/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>+ Tambah SubPoyek</a>            
            
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

