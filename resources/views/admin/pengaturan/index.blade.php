@extends('layouts.master')

@section('title', 'Pengaturan')

@section('content')
    <div class="card">
        <div class="card-header">
          <h5 class="float-left">Pengaturan</h5>
        </div>
        <div class="card-body">
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

            @php
              $model = json_decode($pengaturan->name);
            @endphp

            <div class="row">
              <div class="col-md-6">
                  <form action="{{ url('admin/setting/pengaturan/update', $pengaturan->uuid) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf

                    <fieldset class="border p-2">
                    <legend class="w-auto">Header</legend>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $model->header->email }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Hp</label>
                        <input type="text" name="hp" class="form-control form-control-sm {{ $errors->has('hp') ? ' is-invalid' : '' }}" value="{{ $model->header->hp }}">
                        @if ($errors->has('hp'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('hp') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control form-control-sm {{ $errors->has('logo') ? ' is-invalid' : '' }}">
                         @if ($errors->has('logo'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif

                        <img src="{{ asset('storage/pengaturan/'. $model->header->logo) }}" class="img-fluid mt-3" alt="">
                      </div>
                    </fieldset>

                    <fieldset class="border p-2 mt-5">
                    <legend class="w-auto">Video</legend>
                      <div class="form-group">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control form-control-sm {{ $errors->has('link') ? ' is-invalid' : '' }}" value="{{ $model->content->video }}">
                         @if ($errors->has('link'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control form-control-sm {{ $errors->has('image') ? ' is-invalid' : '' }}">
                         @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif

                        <img src="{{ asset('storage/video/'. $model->content->img_video) }}" class="img-fluid mt-3" alt="">
                      </div>
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control form-control-sm {{ $errors->has('judul') ? ' is-invalid' : '' }}" value="{{ $model->content->judul }}">
                         @if ($errors->has('judul'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control {{ $errors->has('keterangan_video') ? ' is-invalid' : '' }}" name="keterangan_video" cols="4" rows="10">{{ $model->content->keterangan }}</textarea>
                         @if ($errors->has('keterangan_video'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('keterangan_video') }}</strong>
                            </span>
                        @endif
                      </div>
                    </fieldset>

                    <fieldset class="border p-2 mt-5">
                    <legend class="w-auto">Contact</legend>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control form-control-sm {{ $errors->has('alamat') ? ' is-invalid' : '' }}" value="{{ $model->contact->alamat }}">
                         @if ($errors->has('alamat'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                      </div>
                    </fieldset>

                    <fieldset class="border p-2 mt-5">
                    <legend class="w-auto">Footer</legend>
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control {{ $errors->has('keterangan') ? ' is-invalid' : '' }}" name="keterangan" cols="4" rows="10">{{ $model->footer->keterangan }}</textarea>
                         @if ($errors->has('keterangan'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('keterangan') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Footer Name</label>
                        <input type="text" name="footer_name" class="form-control form-control-sm {{ $errors->has('footer_name') ? ' is-invalid' : '' }}" value="{{ $model->footer->footer_name }}">
                         @if ($errors->has('footer_name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('footer_name') }}</strong>
                            </span>
                        @endif
                      </div>
                    </fieldset>

                    <button class="float-right btn btn-primary mt-5 mb-5">Simpan</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
@endsection
