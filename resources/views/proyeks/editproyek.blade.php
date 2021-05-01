@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Proyek</h4></div>
        <div class="card-body">
                <div class="row">               
                    <form action="{{ route('updateproyek',$proyek->id) }}" method="post">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <select name="customer" class="form-control @error('customer') is-invalid @enderror">
                            <option value="">--Pilih--</option>
                            @foreach ($custom as $item)
                            <option value="{{$item->nama_customer}}"{{old('customer') == $item->nama_customer ? 'selected': null}}>{{$item->nama_customer}}</option>
                            @endforeach
                        </select>
                        @error('customer')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
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
                        <select name="pimpinan_proyek" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($worker as $item)
                            <option value="{{$item->nama_worker}}"{{old('pimpinan_proyek',$proyek->pimpinan_proyek) == $item->nama_worker ? 'selected': null}}>{{$item->nama_worker}}</option>
                            @endforeach
                        </select>                       
                    </div>     

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                        <option value="Belum Diproses" @if($proyek->status == 'Belum Diproses')selected @endif>Belum Diproses</option>
                        <option value="Sedang Diproses" @if($proyek->status == 'Sedang Diproses')selected @endif>Sedang Diproses</option>
                        <option value="Selesai" @if($proyek->status == 'Selesai')selected @endif>Selesai</option>
                        </select>
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

