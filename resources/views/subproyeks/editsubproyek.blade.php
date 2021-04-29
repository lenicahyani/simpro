@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Proyek</h4></div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                @if(session('sukses'))
                <div class="alert alert-primary">
                {{session('sukses')}}  
                </div>
                @endif
                <form action="{{ route('updateproyek',$proyek->id) }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input name="customer" type="text" class="form-control" value="{{$proyek->customer}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <input name="nama_proyek" type="text" class="form-control" value="{{$proyek->nama_proyek}}">
                    </div> 
                    <div class="form-group">
                        <label>Tanggal Estimasi</label>
                        <input name="tanggal_estimasi" type="date" class="form-control" value="{{$proyek->tanggal_estimasi}}">
                    </div> 
                    <div class="form-group">
                        <label>Harga Proyek</label>
                        <input name="nilai_proyek" type="text" class="form-control" value="{{$proyek->nilai_proyek}}">
                    </div>
                    <div class="form-group">
                        <label>Termin</label>
                        <input name="termin" type="text" class="form-control" value="{{$proyek->termin}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Pimpinan</label>
                        <select class="form-control" name="pimpinan_proyek" >
                        <option  value="id" @if($proyek->nama_pimpinan == 'ambil dari tabel worker')selected @endif>ambil dari tabel worker</option>
                        <option  value="id" @if($proyek->nama_pimpinan == 'ambil dari ewe tabel worker')selected @endif>ambil dari ewe tabel worker</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option value="BD" @if($proyek->status == 'Belum Diproses')selected @endif>Belum Diproses</option>
                        <option value="SD" @if($proyek->status == 'Sedang Diproses')selected @endif>Sedang Diproses</option>
                        <option value="S" @if($proyek->status == 'Selesai')selected @endif>Selesai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Total Pembayaran</label>
                        <input name="total_pembayaran" type="text" class="form-control" value="{{$proyek->total_pembayaran}}">
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

