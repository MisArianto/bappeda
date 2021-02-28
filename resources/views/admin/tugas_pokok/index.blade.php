@extends('layouts.master')

@section('title', 'Visi Misi')

@section('content')

    <div class="card">
        <div class="card-header">
           <h5>Tugas Pokok dan Fungsi</h5>
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
                
                <form action="{{ url('admin/tugas-fungsi/update', $model->id) }}" method="POST">
                  <input type="hidden" name="_method" value="PUT">
                  @csrf

                  <div class="form-group">
                    <label>Content</label>
                    <textarea id="editor" name="content" rows="10" cols="10" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}">{!! $model->content !!}</textarea>
                    @if ($errors->has('content'))
                          <span class="text-danger">
                              <strong>{{ $errors->first('content') }}</strong>
                          </span>
                      @endif
                  </div>

                  <button class="btn btn-primary"> Simpan</button>
                  
                </form>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
      CKEDITOR.replace('editor');
    })
  </script>
@endsection
