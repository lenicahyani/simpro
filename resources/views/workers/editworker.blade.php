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
                        <label>Role</label>
                        <select class="form-control" name="role" >
                        <option  value="1" @if($worker->role == 'Administrator')selected @endif>Administrator</option>
                        <option  value="2" @if($worker->role == 'Worker')selected @endif>Worker</option>
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

