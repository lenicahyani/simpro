@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Tambah Customer</h4></div>
        <div class="card-body">
            <form action="{{ route('simpancustomer') }}" method="post">
            {{csrf_field()}}            
            <div class="form-group">
                <label>Nama Customer</label>
                <input name="nama_customer" type="text" class="form-control">
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control">
            </div> 
            <div class="form-group">
                <label>Telepon</label>
                <input name="telepon" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control">
            </div>            
            <div class="card-footer text-right">
                <button  type="submit" class="btn btn-primary mr-1">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

