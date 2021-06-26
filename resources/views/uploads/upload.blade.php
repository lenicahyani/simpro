

@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-12 col-md-6 col-lg-6">
<div class="card">
    <div class="card-header"><h4>Upload File</h4></div>
        <div class="card-body">
          <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file">
                </div>

                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea class="form-control" name="keterangan"></textarea>
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
            
            <h4 class="my-5">Data</h4>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1%">File</th>
                        <th>Keterangan</th>
                        <th width="1%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($upload as $g)
                    <tr>
                        <td><img width="150px" src="{{ url('/uploads/'.$g->file) }}"></td>
                        <td>{{$g->keterangan}}</td>
                        <td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
@endpush

