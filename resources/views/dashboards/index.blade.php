@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="col-20 col-md-20 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Hai , {{Auth::user()->name}}<div class="text-muted d-inline font-weight-normal"></div></div>
                  </div>

                  <div class="form-group col-md-7 col-12">
                            <label>Nama</label>
                            <input type="name" class="form-control" value="{{ Auth::user()->name }}">
                            
                    </div>
                    <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}">
                            
                     </div>
                </div>
              </div>
@endsection

@push('page-scripts')


@endpush