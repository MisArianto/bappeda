@extends('layouts.master')

@section('title', 'Tambah Dokumen')

@section('content')

    <div class="card">
        <div class="card-header">
            <h5>Tambah</h5>
        </div>
        <div class="card-body row">
            <div class="col-md-4">
                <form  action="{{ url('admin/dokumens/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control form-control-sm {{ $errors->has('name') ? ' is-invalid' : '' }}">
                      @if ($errors->has('name'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file" class="form-control form-control-sm {{ $errors->has('file') ? ' is-invalid' : '' }}">
                    @if ($errors->has('file'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('file') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>Tahun</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('tahun') ? ' is-invalid' : '' }}" name="tahun" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($tahuns as $tahun)
                       <option value="{{ $tahun->name }}">{{ $tahun->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('tahun'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('tahun') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>Sumber</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('sumber') ? ' is-invalid' : '' }}" name="sumber" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($sumbers as $sumber)
                       <option value="{{ $sumber->name }}">{{ $sumber->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('sumber'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('sumber') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>Versi</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('versi') ? ' is-invalid' : '' }}" name="versi" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($versis as $versi)
                       <option value="{{ $versi->name }}">{{ $versi->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('versi'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('versi') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>Kategori</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('kategori') ? ' is-invalid' : '' }}" name="kategori" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($kategoris as $kategori)
                       <option value="{{ $kategori->name }}">{{ $kategori->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('kategori'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('kategori') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>PIC</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('pic') ? ' is-invalid' : '' }}" name="pic" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($pics as $pic)
                       <option value="{{ $pic->name }}">{{ $pic->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('pic'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('pic') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label>Keterangan Dokumen</label>
                     <select class="form-control form-control-sm select2 {{ $errors->has('keterangan') ? ' is-invalid' : '' }}" name="keterangan" style="width: 100%;">
                       <option value="">Pilih</option>
                       @foreach($keterangans as $k)
                       <option value="{{ $k->name }}">{{ $k->name }}</option>
                       @endforeach
                     </select>
                     @if ($errors->has('keterangan'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('keterangan') }}</strong>
                          </span>
                      @endif
                  </div>

                  <div class="btn-group float-right">
                    <button
                      type="submit"
                      class="btn btn-info"
                    >Simpan</button>
                    <a href="{{ url('admin/dokumens') }}" class="btn btn-dark">Kembali</a>
                  </div>
              </form>
            </div>
        </div>
    </div>


@endsection
