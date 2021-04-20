@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Proyek</h4></div>
        <div class="card-body">
            <div class="row">               
            <form action="{{ route('simpanproyek') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Customer</label>
                <input name="customer" type="text" class="form-control @error('customer') is-invalid @enderror" value="{{old('customer',$proyek->customer)}}">
                @error('customer')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama Proyek</label>
                <input name="nama_proyek" type="text" class="form-control @error('nama_proyek') is-invalid @enderror" value="{{old('nama_proyek',$proyek->nama_proyek)}}">
                @error('nama_proyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Tanggal Estimasi</label>
                <input name="tanggal_estimasi" type="date" class="form-control @error('tanggal_estimasi') is-invalid @enderror" value="{{old('tanggal_estimasi',$proyek->tanggal_estimasi)}}">
                @error('tanggal_estimasi')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Harga Proyek</label>
                <input name="nilai_proyek" type="text" class="form-control @error('nilai_proyek') is-invalid @enderror" value="{{old('nilai_proyek',$proyek->nilai_proyek)}}">
                @error('nilai_proyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Termin</label>
                <input name="termin" type="text" class="form-control @error('termin') is-invalid @enderror" value="{{old('termin',$proyek->termin)}}">
                @error('termin')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Nama Pimpinan</label>
                <select name="pimpinan_proyek" class="form-control @error('pimpinan_proyek') is-invalid @enderror">
                    <option value="">--Pilih--</option>
                    @foreach ($worker as $item)
                    <option value="{{$item->nama_worker}}"{{old('pimpinan_proyek',$proyek->pimpinan_proyek) == $item->nama_worker ? 'selected': null}}>{{$item->nama_worker}}</option>
                    @endforeach
                </select>
                @error('pimpinan_proyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" value="{{old('status',$proyek->status)}}" class="form-control @error('status') is-invalid @enderror" >
                <option value="">--Pilih--</option>
                <option>Belum Diproses</option>
                <option>Sedang Diproses</option>
                <option>Selesai</option>
                </select>
                @error('status')
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
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

