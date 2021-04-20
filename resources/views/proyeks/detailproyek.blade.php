@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-3 col-md-3 col-lg-5">
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
    <div class="col-7 col-md-7 col-lg-7">
    @if(session('sukses'))
    <div class="alert alert-primary">
    {{session('sukses')}}
    </div>
    @endif
    <div class="col-1 col-md-1 col-lg-12">
    <div clas ="box-header with-border">                
</div>    
</div>         
</div>
<!-- detail proyek -->
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header">
    <h4>Detail Proyek</h4>
    </div>
    <div class="card-body">
    <table class = "table  table-sm">
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
        <td> Total Pembayaran </td>
        <td>{{ $proyek->total_pembayaran}}</td>
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
<div class="col-12 col-md-8 col-lg-6">
<div >    
    <div class="card-body">
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
        </table>
    </div>
</div>
</div>
    
    </div>
</div>
@endsection