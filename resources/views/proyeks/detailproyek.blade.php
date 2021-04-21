@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-12 col-lg-12">
<div class="card-body">
    <ul class="nav nav-pills">
        <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Subprojek</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i>Tim</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cog"></i> Setting</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
    @if(session('sukses'))
    <div class="alert alert-primary">
    {{session('sukses')}}
    </div>
    @endif
    <div class="col-12 col-md-12 col-lg-12">
    <div clas ="box-header with-border">                
</div>    
</div>         
</div>
<!-- detail proyek -->
<div class="col-12 col-md-12 col-lg-12">
<div class="card">
    <div class="card-header">
    <h4>Detail Proyek</h4>
    </div>
    <div class="card-body">
    <table class="table table-striped table-sm">
    <tr>
        <td> ID PROYEK </td>
        <td>{{ $proyek->id}}</td>
    </tr>

    <tr>
        <td> Nama Customer </td>
        <td>{{ $proyek->customer}}</td>
    </tr>

    <tr>
        <td> Nama proyek </td>
        <td>{{ $proyek->nama_proyek}}</td>
    </tr>

    <tr>
        <td> Harga Proyek</td>
        <td>{{ $proyek->nilai_proyek}}</td>
    </tr>

    <tr>
        <td> termin </td>
        <td>{{ $proyek->termin}}</td>
    </tr>

    <tr>
        <td> Pimpinan Proyek </td>
        <td>{{ $proyek->pimpinan_proyek}}</td>
    </tr>
    <tr>
        <td> status </td>
        <td>{{ $proyek->status}}</td>
    </tr>   
    <tr>
        <td> Tanggal Estimasi </td>
        <td>{{ $proyek->tanggal_estimasi}}</td>
        
    </tr>                                   
</table>
    </div>
    <div class="card-footer">
    <td><a href="/proyek/{{$proyek->id}}/edit" class="badge badge-warning">Edit</a></td>
    </div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-12">   
    <div class="card-body">
        @if(session('suksess'))
        <div class="alert alert-primary">
           {{session('suksess')}}
        </div>
        @endif
        <a href="/proyek/{{$proyek->id}}/addsubproyek" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i>Tambah Subroyek</a>
        <table class="table table-striped table-md">
            <tr>
                <!-- <th>No</th> -->
                <th>Nama Proyek</th> 
                <th>Tim</th>           
                <th>Nama Tugas</th>                
                <th>Deskripsi</th>
                <th>Nilai</th>  
                <th>progres</th>                  
                <th><td>Action</td></th>
            </tr>           
            @foreach($subproyek as $subproyek)
                <tr>
                    <td>{{$subproyek->nama_proyek}}</td>
                    <td>{{$subproyek->tim}}</td>                    
                    <td>{{$subproyek->nama_tugas}}</td>
                    <td>{{$subproyek->deskripsi}}</td>
                    <td>{{$subproyek->nilai}}</td>
                    <td>{{$subproyek->progres}}</td>  
                    <td><a href="/proyek/{{$subproyek->id}}/edit" class="badge badge-warning">Edit</a></td>
                    <td><a href="/proyek/{{$subproyek->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach   
        </table>
    </div>
</div>
</div>
    
    </div>
</div>
@endsection