@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card-body">
        <form action="{{ route('simpanworker') }}" method="POST">
        <!-- closed request foldery -->
        @csrf
            <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div>
            <div class="form-group">
                <label>Kode Anggota</label>
                <input type="text" name="kode_anggota" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Anggota</label>
                <input type="text" name="nama_anggota" class="form-control">
            </div>
            <div class="form-group"  >
                <label>Posisi</label>
                <select class="form-control" name="posisi" >
                <option>Frontand Web</option>
                <option>Backand Web</option>
                <option>UI/UX Web</option>
                <option>Frontand Android</option>
                <option>Backand Android</option>
                <option>UI/UX Android</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control">
            </div>
            </div>   
            <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
            </div> 
        </form>             
        </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
