@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Tambah Proyek</h4></div>
        <div class="card-body">
            <form action="{{ route('simpanproyek') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Customer</label>
                <input name="customer" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Proyek</label>
                <input name="nama_proyek" type="text" class="form-control">
            </div> 
            <div class="form-group">
                <label>Tanggal Estimasi</label>
                <input name="tanggal_estimasi" type="date" class="form-control">
            </div> 
            <div class="form-group">
                <label>Harga Proyek</label>
                <input name="nilai_proyek" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Termin</label>
                <input name="termin" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Pimpinan</label>
                <select class="form-control" name="pimpinan_proyek">
                <option>ambil dari tabel worker</option>
                <option>ambil dari tabel worker</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                <option>Belum Diproses</option>
                <option>Sedang Diproses</option>
                <option>Selesai</option>
                </select>
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

