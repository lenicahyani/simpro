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
            <table class="table table-striped table-md">
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Nama Tugas</th>
                    <th>Nilai Tugas</th> 
                    <th>Deskripsi</th>  
                    <th>Progres</th>  
                    <th>Gaji</th>   
                    <th>Action</th>
                </tr>  
                @foreach($detailgaji as $no=>$dtgaji)
                <tr>          
                    <td>{{++$no}}</td>        
                    <td>{{$dtgaji->nama_worker}}</td>                    
                    <td>{{$dtgaji->nama_subproyek}}</td>
                    <td>{{$dtgaji->nilai_subproyek}}</td>                    
                    <td>{{$dtgaji->deskripsi}}</td>                   
                    <td>{{$dtgaji->progres}}</td>                        
                    <td>{{$dtgaji->gaji}}</td>   
                    <td><a  href="/indexgaji/{{$dtgaji->id}}/{{$dtgaji->id_sub}}/editgaji" class="badge badge-warning">Edit</a></td>
                    <td><a href="/indexgaji/{{$dtgaji->id_sub}}/deletegaji" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
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

