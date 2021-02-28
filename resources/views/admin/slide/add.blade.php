@extends('layouts.master')

@section('title', 'Tambah Dokumen')

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Tambah</h5>
        </div>
        <div class="card-body row">
            <div class="col-md-4">
                <form  action="{{ url('admin/slides/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('username') ? ' is-invalid' : '' }}">
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>Slide</label>
                    <input type="file" name="slide" class="form-control form-control-sm {{ $errors->has('username') ? ' is-invalid' : '' }}">
                    @if ($errors->has('slide'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('slide') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="btn-group float-right">
                    <button
                      type="submit"
                      class="btn btn-info"
                    >Simpan</button>
                    <a href="{{ url('admin/slides') }}" class="btn btn-dark">Kembali</a>
                  </div>
              </form>
            </div>
        </div>
    </div>


@endsection
