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
            <table class="table table-striped table-md">
                <tr>
                    <!-- <th>No</th> -->
                    <th>Nama Pegawai</th>
                    <th>Nama Tugas</th>
                    <th>Nilai Tugas</th> 
                    <th>Deskripsi</th>  
                    <th>Progres</th>  
                    <th>Gaji</th>       
                    <th>Action</th>
                </tr>  
                @foreach($gaji as $gji)
                <tr>                   
                    <td>{{$gji->nama_worker}}</td>                    
                    <td>{{$gji->nama_subproyek}}</td>
                    <td>{{$gji->nilai_subproyek}}</td>                    
                    <td>{{$gji->deskripsi}}</td>                   
                    <td>{{$gji->progres}}</td>                        
                    <td>{{$gji->gaji}}</td>   
                    <td><a  href="/gaji/{{$gji->id}}/editgaji" class="badge badge-warning">Edit</a></td>
                    <td><a href="/gaji/{{$gji->id}}/deletegaji" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
            <div class ="card-footer">
                {{$gaj->links()}}
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

