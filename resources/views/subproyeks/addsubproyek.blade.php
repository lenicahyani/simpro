@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Tambah Subproyek</h4></div>
        <div class="card-body">
            <form action="{{ route('simpansubproyek') }}" method="post">
            {{csrf_field()}}           
            <div class="form-group">
                <label>Nama Proyek</label>
                <input name="nama_proyek" type="text" class="form-control @error('nama_proyek') is-invalid @enderror" value="{{old('nama_proyek')}}">
                @error('nama_proyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Tim</label>
                <select name="tim" class="form-control @error('tim') is-invalid @enderror">
                    <option value="">--Pilih--</option>
                    @foreach ($worker as $item)
                    <option value="{{$item->nama_worker}}"{{old('tim') == $item->nama_worker ? 'selected': null}}>{{$item->nama_worker}}</option>
                    @endforeach
                </select>
                @error('tim')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>     
            <div class="form-group">
                <label>Nama Tugas</label>
                <input name="nama_tugas" type="text" class="form-control @error('nama_tugas') is-invalid @enderror" value="{{old('nama_tugas')}}">
                @error('nama_tugas')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" value="{{old('deskripsi')}}" name="deskripsi"></textarea>
            </div>           
            <div class="form-group">
                <label>Nilai</label>
                <input name="nilai" type="text" class="form-control @error('nilai') is-invalid @enderror" value="{{old('nilai')}}">
                @error('nilai')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>           
            <div class="form-group">
                <label>Progres</label>
                <input type="range" class="form-control" name="progres">
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

