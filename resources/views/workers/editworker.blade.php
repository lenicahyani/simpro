@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Worker</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                @if(session('sukses'))
                <div class="alert alert-primary">
                {{session('sukses')}}
                </div>
                @endif
                <form action="{{ route('updateworker',$worker->id) }}" method="post">
                    {{csrf_field()}}                   
                    <div class="form-group">
                        <label>Nama Worker</label>
                        <input name="nama_worker" type="text" class="form-control" value="{{$worker->nama_worker}}">
                    </div> 
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" value="{{$worker->alamat}}">
                    </div>                    
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value="BACKEND PROGRAMMER" @if($worker->status == 'BACKEND PROGRAMMER')selected @endif>BACKEND PROGRAMMER</option>
                        <option value="PM" @if($worker->status == 'PM')selected @endif>PM</option>
                        <option value="FRONTEND PROGRAMMER" @if($worker->status == 'FRONTEND PROGRAMMER')selected @endif>FRONTEND PROGRAMMER</option>
                        <option value="ANALIS" @if($worker->status == 'ANALIS')selected @endif>ANALIS</option>
                        <option value="TESTER" @if($worker->status == 'TESTER')selected @endif>TESTER</option>
                        <option value="DB DESIGNER" @if($worker->status == 'DB DESIGNER')selected @endif>DB DESIGNER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{$worker->email}}">
                    </div> 
                    <div class="form-group">
                        <label>Telepon</label>
                        <input name="telepon" type="text" class="form-control" value="{{$worker->telepon}}">
                    </div>                                       
                    <div class="card-footer text-right">
                        <button  type="submit" class="btn btn-primary mr-1">Simpan</button>
                    </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

