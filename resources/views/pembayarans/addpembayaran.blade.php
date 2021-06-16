@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Tambah Pembayaran</h4></div>
        <div class="card-body">
            <form action="{{ route('simpanpembayaran') }}" method="post">
            {{csrf_field()}}         
            <div class="form-group">
                <label>Nama Customer</label>
                <select name="customer" class="form-control @error('customer') is-invalid @enderror">
                    <option value="">--Pilih--</option>
                    @foreach ($customer as $item)
                    <option value="{{$item->nama_customer}}"{{old('customer') == $item->nama_customer ? 'selected': null}}>{{$item->nama_customer}}</option>
                    @endforeach
                </select>
                @error('customer')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>                          
            <div class="form-group">
                <label>Nama Proyek</label>
                <select name="nama_proyek" class="form-control @error('nama_proyek') is-invalid @enderror">
                    <option value="">--Pilih--</option>
                    @foreach ($proyek as $item)
                    <option value="{{$item->nama_proyek}}"{{old('nama_proyek') == $item->nama_proyek ? 'selected': null}}>{{$item->nama_proyek}}</option>
                    @endforeach
                </select>
                @error('nama_proyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>             
            <div class="form-group">
                <label>Tanggal Bayar</label>
                <input name="tanggal_bayar" type="date" class="form-control @error('tanggal_bayar') is-invalid @enderror" value="{{old('tanggal_bayar')}}">
                @error('tanggal_bayar')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Total Bayar</label>
                <input name="total_bayar" type="text" class="form-control @error('total_bayar') is-invalid @enderror" value="{{old('total_bayar')}}">
                @error('total_bayar')
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

