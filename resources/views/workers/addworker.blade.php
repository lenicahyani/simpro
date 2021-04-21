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
                <input name="nama_worker" type="text" class="form-control @error('nama_worker') is-invalid @enderror"  value="{{old('nama_worker')}}">
                @error('nama_worker')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>            
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"  value="{{old('alamat')}}">
                @error('alamat')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Role</label>
                <select  class="form-control @error('role') is-invalid @enderror" name="role"  value="{{old('role')}}">
                <option value="">--Pilih--</option>
                <option value="Administrator">Administrator</option>
                <option value="Worker">Worker</option>
                </select>
                @error('role')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control @error('status') is-invalid @enderror" name="status"  value="{{old('status')}}">
                <option value="">--Pilih--</option>
                <option value="BACKEND PROGRAMMER">BACKEND PROGRAMMER</option>
                <option value="PM">PM</option>
                <option value="FRONTEND PROGRAMMER">FRONTEND PROGRAMMER</option>
                <option value="ANALIS">ANALIS</option>
                <option value="TESTER">TESTER</option>
                <option value=">DB DESIGNER">DB DESIGNER</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}">
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Telepon</label>
                <input name="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror"  value="{{old('telepon')}}">
                @error('telepon')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
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

