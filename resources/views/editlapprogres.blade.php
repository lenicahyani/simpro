@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card-body">
        <form action="{{ route('updatelapprogres',$lapprogres->lapprogres_id) }}" method="POST">
        <!-- closed request foldery -->
        @csrf
        @method('patch')

            <div class="alert alert-info">
                <b>Note!</b> Not all browsers support HTML5 type input.
            </div>
            
            <div class="form-group">
                <label @error('lapprogres_name')
                    class="text-danger"
                @enderror>Nama lapprogres @error('lapprogres_name')
                    {{$message}}
                @enderror</label>
                <input type="text" name="lapprogres_name" 
                @if(old('lapprogres_name'))
                value= "{{ old('lapprogres_name') }}" 
                    @else                
                    value= "{{ $lapprogres->lapprogres_name }}" 
                @endif
                class="form-control">
            </div>

            <div class="form-group">
                <label @error('alamat')
                    class="text-danger"
                @enderror>Alamat @error('alamat')
                    {{$message}}
                @enderror</label>
                <input type="text" name="alamat" 
                @if(old('alamat'))
                value= "{{ old('alamat') }}" 
                    @else                
                    value= "{{ $lapprogres->alamat }}" 
                @endif
                class="form-control">
            </div>
            
            <!-- <div class="form-group">            
            <div class="form-group">
                <label class="d-block">Role</label>
                <div class="form-check">
                <label><input class="form-check-input" name="role[]" value= "1" type="checkbox">
                    Administrator
                </label>
                </div>
                <div class="form-check">
                <label><input class="form-check-input" name="role[]" value= "2" type="checkbox">
                    lapprogres
                </label>
                </div>
            </div>             -->
            <div class="form-group"  >
                <label>Role</label>
                <select class="form-control" name="role" >
                <option>Administrator</option>
                <option>lapprogres</option>
                </select>
            </div>  
            <div class="form-group">
                <label @error('email')
                    class="text-danger"
                @enderror>Email @error('email')
                    {{$message}}
                @enderror</label>
                <input type="email"  value= "{{  $lapprogres->email  }}" name="email" class="form-control">
            </div>
            <div class="form-group">
            <label @error('telepon')
                    class="text-danger"
                @enderror>Telepon @error('telepon')
                    {{$message}}
                @enderror</label>
                <input type="text" name="telepon" 
                @if(old('telepon'))
                value= "{{ old('telepon') }}" 
                    @else                
                    value= "{{ $lapprogres->telepon }}" 
                @endif
                class="form-control">
            </div>
            </div>   
            <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
            </div> 
        </form>             
        </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
