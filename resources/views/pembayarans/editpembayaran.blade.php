@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Edit Proyek</h4></div>
        <div class="card-body">
            <div class="row">               
                <form action="{{ route('updatepembayaran',$pembayaran->id) }}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <select name="customer" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($customer as $item)
                            <option value="{{$item->nama_customer}}"{{old('customer',$pembayaran->customer) == $item->nama_customer ? 'selected': null}}>{{$item->nama_customer}}</option>
                            @endforeach
                        </select>                       
                    </div> 
                    <div class="form-group">
                        <label>Nama Proyek</label>
                        <select name="nama_proyek" class="form-control">
                            <option value="">--Pilih--</option>
                            @foreach ($proyek as $item)
                            <option value="{{$item->nama_proyek}}"{{old('nama_proyek',$pembayaran->nama_proyek) == $item->nama_proyek ? 'selected': null}}>{{$item->nama_proyek}}</option>
                            @endforeach
                        </select>                       
                    </div>                       
                    <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <input name="tanggal_bayar" type="text" class="form-control" value="{{$pembayaran->tanggal_bayar}}">
                    </div>
                    <div class="form-group">
                        <label>Total Bayar</label>
                        <input name="total_bayar" type="text" class="form-control" value="{{$pembayaran->total_bayar}}">
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

