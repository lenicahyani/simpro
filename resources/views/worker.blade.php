@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="worker/add" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i> Tambah Anggota</a>
            <hr>            
            <table class="table table-stiped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Posisi</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>  
                </thead>     
                <tbody>
                    @foreach ($worker as $no => $data)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$data->kode_anggota}}</td>
                        <td>{{$data->nama_anggota}}</td>
                        <td>{{$data->posisi}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>
                        <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>        
            </table>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>


@endpush
