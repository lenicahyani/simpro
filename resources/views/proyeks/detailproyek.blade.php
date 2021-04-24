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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Subproyek
    </button>                    
        <table class="table table-striped table-md">
            <tr>
                <!-- <th>No</th> -->
                <th>Nama Proyek</th>                            
                <th>Nama Tugas</th>   
                <th>Tim</th>      
                <th>Nilai</th>         
                <th>Deskripsi</th>                
                <th>Progres</th>                  
                <th>Action</th>
            </tr>           
                @foreach($proyek->worker as $worker)
                    <tr>
                        <td>{{$proyek->nama_proyek}}</td>
                        <td>{{$worker->pivot->nama_subproyek}}</td>
                        <td>{{$worker->nama_worker}}</td>                    
                        <td>{{$worker->pivot->nilai_subproyek}}</td>
                        <td>{{$worker->pivot->deskripsi}}</td>
                        <td>{{$worker->pivot->progres}}</td>
                        <td><a href="/proyek/{{$worker->id}}/edit" class="badge badge-warning">Edit</a>
                        <a href="/proyek/{{$worker->id}}/delete" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                    </tr>
                @endforeach   
        </table>
    </div>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Subproyek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/proyek/{{$proyek->id}}/addsubproyek" method="POST">
            {{csrf_field()}} 
            <div class="form-group">
                <label for="proyek">Nama Proyek</label>
                <select class="form-control" id="proyek" name="proyek">
                    @foreach ($dropproyek as $pro)
                    <option value="{{$pro->id}}">{{$pro->nama_proyek}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="worker">Nama Tim</label>
                <select class="form-control" id="worker" name="worker">
                    @foreach ($data_worker as $wor)
                    <option value="{{$wor->id}}">{{$wor->nama_worker}}</option>
                    @endforeach
                </select>
            </div>   
            <div class="form-group">
                <label>Nama Tugas</label>
                <input name="nama_subproyek" type="text" class="form-control @error('nama_subproyek') is-invalid @enderror" value="{{old('nama_subproyek')}}">
                @error('nama_subproyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Nilai</label>
                <input name="nilai_subproyek" type="text" class="form-control @error('nilai_subproyek') is-invalid @enderror" value="{{old('nilai_subproyek')}}">
                @error('nilai_subproyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" value="{{old('deskripsi')}}" name="deskripsi"></textarea>
            </div>  
            <div class="form-group">
                <label>Progres</label>
                <input type="range" class="form-control" name="progres">
            </div>   
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('page-scripts')
<script src="assets/js/page/bootstrap-modal.js"></script>
@endpush
