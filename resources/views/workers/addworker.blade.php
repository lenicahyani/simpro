@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Tambah Worker</h4></div>
        <div class="card-body">
            <form action="{{ route('simpanworker') }}" method="post">
            {{csrf_field()}}            
            <div class="form-group">
                <label>Nama Worker</label>
                <input name="nama_worker" type="text" class="form-control">
            </div>            
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control">
            </div> 
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role">
                <option value="">--Pilih--</option>
                <option>Administrator</option>
                <option>Worker</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                <option>BACKEND PROGRAMMER</option>
                <option>PM</option>
                <option>FRONTEND PROGRAMMER</option>
                <option>ANALIS</option>
                <option>TESTER</option>
                <option>DB DESIGNER</option>
                </select>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control">
            </div> 
            <div class="form-group">
                <label>Telepon</label>
                <input name="telepon" type="text" class="form-control">
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

