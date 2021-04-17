@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses'))
        <div class="alert alert-primary">
           {{session('sukses')}}
        </div>
        @endif
            <a href="proyek/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Proyek</a>            
            <table class="table table-striped table-md">
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama Customer</th>
                    <th>Nama Proyek</th> 
                    <th>Harga Proyek</th>        
                    <th>Pimpinan Proyek</th>         
                    <th>Status</th>                
                    <th>Tanggal Estimasi</th>     
                    <th>Action</th>
                </tr>  
                @foreach($data_proyek as $proyek)
                <tr>
                    <td>{{$proyek->customer}}</td>
                    <td>{{$proyek->nama_proyek}}</td>                    
                    <td>{{$proyek->nilai_proyek}}</td>
                    <td>{{$proyek->pimpinan_proyek}}</td>
                    <td>{{$proyek->status}}</td>
                    <td>{{$proyek->tanggal_estimasi}}</td>  
                    <td><a href="/proyek/{{$proyek->id}}/detail" class="badge badge-success">Detail</a></td> 
                    <td><a href="/proyek/{{$proyek->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

