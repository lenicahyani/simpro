@extends('layouts.master')
@section('title','Laravel')
@section('content')

<div class="col-12 col-md-12 col-lg-12">
    <div class="card-body">
    <!-- <ul class="nav nav-pills">
        <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fas fa-home"></i> Subprojek</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('pembayaran')}}"><i class="fas fa-money"></i>Pembayaran</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cog"></i> Setting</a>
        </li>
    </ul> -->
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        @if(session('sukses1'))
        <div class="alert alert-primary">
        {{session('sukses1')}}
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
    <tr>
        <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{$hsl1}}%;">{{$hsl1}}%</div>
                    </div>
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
    @if(session('sukses2'))
        <div class="alert alert-primary">
            {{session('sukses2')}}
        </div>
    @endif
    @if(session('sukses3'))
        <div class="alert alert-primary">
            {{session('sukses3')}}
        </div>
    @endif
    @if(session('sukses'))
        <div class="alert alert-danger">
            {{session('sukses')}}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
           {{session('error')}}
        </div>
    @endif
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal1">
    Tambah Subproyek
    </button>                    
        <table class="table table-striped table-md">
            <tr>
                <th>No</th>
                <th>Nama Proyek</th>                            
                <th>Nama Tugas</th>   
                <th>Tim</th>      
                <th>Nilai</th>         
                <th>Deskripsi</th>              
                <th>Progres</th>                 
                <th>Laporan</th> 
                <th colspan=2>Action</th>
            </tr>           
                @foreach($proyek->worker as $no=>$worker)
                    <tr>
                        <td>{{++$no}}</td>   
                        <td>{{$proyek->nama_proyek}}</td>
                        <td>{{$worker->pivot->nama_subproyek}}</td>
                        <td>{{$worker->nama_worker}}</td>                    
                        <td>{{$worker->pivot->nilai_subproyek}}</td>
                        <td>{{$worker->pivot->deskripsi}}</td> 
                        <td><a href="/proyek/{{$worker->pivot->proyek_id}}/{{$worker->pivot->id}}/editsubproyek" class="text text-primary">{{$worker->pivot->progres}}%</a></td>
                        <td>{{$worker->pivot->upload}}</td> 
                        <td><a href="/proyek/{{$worker->pivot->proyek_id}}/{{$worker->pivot->id}}/uploaddoc" class="btn btn-icon icon-left "><i class="fas fa-upload"></i></a></td>
                        <!-- <td><a href="/proyek/{{$worker->pivot->proyek_id}}/{{$worker->pivot->id}}/addupload" class="btn btn-icon icon-left "><i class="fas fa-upload"></i></a></td>                      
                        <td><a href="/proyek/{{$worker->pivot->proyek_id}}/{{$worker->pivot->id}}/addupload" class="btn btn-icon icon-left "><i class="fas fa-eye"></i></a></td>
                        <td><a href="/proyek/{{$worker->pivot->proyek_id}}/{{$worker->pivot->id}}/download/{{$worker->pivot->upload}}" class="btn btn-icon icon-left "><i class="fas fa-download"></i></a></td>   -->
                        <td><a href="/proyek/{{$proyek->id}}/{{$worker->id}}/deletesubproyek" class="badge badge-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
                    </tr>
                @endforeach   
        </table>
    </div>
</div>
</div>
</div>
</div>


<!-- Modal Add -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal1Label">Tambah Subproyek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/proyek/{{$proyek->id}}/addsubproyek" method="POST">
            {{csrf_field()}}                         
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
                <input name="nama_subproyek" type="text" class="form-control @error('nama_subproyek') is-invalid @enderror" value="{{old('nama_subproyek')}}" required>
                @error('nama_subproyek')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div> 
            <div class="form-group">
                <label>Nilai Subproyek</label>
                <input name="nilai_subproyek" type="text" class="form-control @error('nilai_subproyek') is-invalid @enderror" value="{{old('nilai_subproyek')}}" required>
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
