@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Subproyek</h4></div>
        <div class="card-body">
        <form action="{{ route('updategaji',$gaji->id) }}" method="POST">
            {{csrf_field()}} 
            <div class="form-group">
                <label>Nama Tugas</label>
                <input name="nama_subproyek" type="text" class="form-control" value="{{$gaji->nama_subproyek}} " disabled>                
            </div> 
            <div class="form-group">
                <label>Nilai Tugas</label>
                <input name="nilai_subproyek" type="text" class="form-control" value="{{$gaji->nilai_subproyek}}" disabled>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" value="{{$gaji->deskripsi}}" disabled>
            </div>
            <div class="form-group">
                <label>Progres</label>
                <input name="progres" type="text" class="form-control" value="{{$gaji->progres}}" disabled>
            </div>            
            <div class="form-group">
                <label>Gaji</label>
                <select name="gaji" class="form-control" >
                <option value="">--Pilih--</option>
                <option value="Belum Dibayar" @if($gaji->gaji == 'Belum Dibayar')selected @endif>Belum Dibayar</option>
                <option value="Sedang Diproses" @if($gaji->gaji == 'Sedang Diproser')selected @endif>Sedang Diproses</option>
                <option value="Sudah Dibayar" @if($gaji->gaji == 'Sudah Dibayar')selected @endif>Sudah Dibayar</option>
                </select>               
            </div>  
            <input type="hidden" name="id_kgji" id="id_kgji" value="{{$id}}">
            
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

