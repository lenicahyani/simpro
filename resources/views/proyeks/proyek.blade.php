@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
<div class="card">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-danger">
           {{session('sukses')}}
        </div>
        @endif
        @if(session('suksesss'))
        <div class="alert alert-success">
           {{session('suksesss')}}
        </div>
        @endif
            <a href="proyek/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Proyek</a>  
            <table class="table table-striped table-md">
                <tr>
                    <th>No</th>
                    <th>Nama Proyek</th> 
                    <th>Nama Customer</th>
                    <th>Harga Proyek</th>        
                    <th>Pimpinan Proyek</th>         
                    <th>Status</th>                
                    <th>Tanggal Estimasi</th> 
                    <th colspan=2>Action</th>
                </tr>  
                @foreach($data_proyek as $no=>$proyek)
                <tr>
                    <td>{{++$no + ($data_proyek->currentPage()-1) * $data_proyek->perPage()}}</td>
                    <td>{{$proyek->nama_proyek}}</td> 
                    <td>{{$proyek->customer}}</td>                   
                    <td>{{$proyek->nilai_proyek}}</td>
                    <td>{{$proyek->pimpinan_proyek}}</td>
                    <td>{{$proyek->status}}</td>
                    <td>{{$proyek->tanggal_estimasi}}</td>  
                    <td><a href="/proyek/{{$proyek->id}}/detail" class="badge badge-primary">Detail</a></td> 
                    <td><a href="/proyek/{{$proyek->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
            <div class="card-footer">
                {{$data_proyek->links()}}
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

