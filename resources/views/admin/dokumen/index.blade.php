@extends('layouts.master')

@section('title', 'Dokumen')

@section('content')
    <div class="card">
        <div class="card-header">
          <h5 class="float-left">Dokumens</h5>
            <a href="{{ url('admin/dokumens/create') }}" class="btn btn-primary float-right btn-sm" >
                <i class="fa fa-plus"></i>
                Add New
            </a>
        </div>
        <div class="card-body row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                  </div>
                @endif
                @if ($message = Session::get('danger'))
                  <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                  </div>
                @endif
                <br>
                @include('admin.dokumen._table')
            </div>
        </div>
    </div>
@endsection
