@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Customer</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                @if(session('sukses'))
                <div class="alert alert-primary">
                {{session('sukses')}}
                </div>
                @endif
                <form action="{{ route('updatecustomer',$customer->id) }}" method="post">
                    {{csrf_field()}}                   
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input name="nama_customer" type="text" class="form-control" value="{{$customer->nama_customer}}">
                    </div> 
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{$customer->email}}">
                    </div> 
                    <div class="form-group">
                        <label>Telepon</label>
                        <input name="telepon" type="text" class="form-control" value="{{$customer->telepon}}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control" value="{{$customer->alamat}}">
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

