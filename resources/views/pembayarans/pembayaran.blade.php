@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
<div class="card">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-primary">
           {{session('sukses')}}
        </div>
        @endif
        @if(session('delete'))
        <div class="alert alert-danger">
           {{session('delete')}}
        </div>
        @endif
            <a href="pembayaran/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Pembayaran</a>            
            <table class="table table-striped table-md">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Nama Proyek</th> 
                    <th>Tanggal Bayar</th>  
                    <th>Total Bayar</th> 
                    <th colspan=2>Action</th>
                </tr>  
                @foreach($pembayaran as $no=>$pembayaran)
                <tr>      
                    <td>{{++$no}}</td>               
                    <td>{{$pembayaran->customer}}</td>                    
                    <td>{{$pembayaran->nama_proyek}}</td>              
                    <td>{{$pembayaran->tanggal_bayar}}</td>                    
                    <td>{{$pembayaran->total_bayar}}</td>
                    <td><a  href="/pembayaran/{{$pembayaran->id}}/edit" class="badge badge-warning">Edit</a></td>
                    <td><a href="/pembayaran/{{$pembayaran->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
@endsection

@push('page-scripts')
@endpush

