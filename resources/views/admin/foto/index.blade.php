@extends('layouts.master')

@section('title', 'Admin Foto')

@section('style')

    <style rel="stylesheet">

        #form-group .uploader .file-input .label{
            background: #2196F3;
            color: #fff;
          }

      #form-group .uploader #icon {
          font-size: 85px;
        }

        #form-group .uploader #caption .file-input .input{
            opacity: 0;
            z-index: -2;
          }

          #form-group .uploader #caption .file-input .label, .input {
            background: #fff;
            color: #2196F3;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            padding: 10px;
            border-radius: 4px;
            margin-top: 7px;
            cursor: pointer;
          }

          #form-group .uploader .file-input {
          width:200px;
          margin:auto;
          height: 68px;
          position: relative;
        }

      #form-group .uploader{
        width:100%;
        background:#2196F3;
        color:#fff;
        padding:40px 15px;
        text-align:center;
        border-radius:10px;
        border:3px dashed #fff;
        font-size:20px;
        position: relative;

        /*&.dragging{
          background: #fff;
          color: #2196F3;
          border: 3px dashed #2196F3;
        }*/

        

        
      }

      #form-group .images-preview .close{
          position: absolute;
          border-radius: 10px;
          background: white;
          cursor: pointer;
          padding-top: 0px;
          padding-bottom: 0px;
          padding-right: 5px;
          padding-left: 5px;
      }

      /*#form-group .images-preview .img-wrapper img{
        max-height: 100px;
      }*/

      #form-group .images-preview .img-wrapper{
          width:  300px;
          display: flex;
          flex-direction: column;
          margin:10px;
          height: 200px;
          justify-content:space-between;
          background: #fff;
          box-shadow: 5px 5px 20px #3e3737;
        }

        #form-group .images-preview .details .name{
            overflow: hidden;
            height: 18px;
          }

        #form-group .images-preview .details{
          font-size: 12px;
          background: #fff;
          color: #000;
          display: flex;
          flex-direction: column;
          align-item: self-start;
          padding: 3px 6px;
        }

      #form-group .images-preview{
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
      }

        .hidden{
            display: none;
        }
    </style>

@endsection

@section('content')

<div class="text-center" id="loading-on">
    @include('layouts._loading')
</div>

<div class="layar" id="loading-off">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary float-right btn-sm" id="btn-tambah">
                <i class="fa fa-plus"></i>
                Add New
            </button>
        </div>
        <div class="card-body row">
            <div class="col-md-12">
                @include('admin.foto._table')
            </div>
        </div>
    </div>
</div>


@include('admin.foto._modal')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data()

            $(document).on('click', '#close', function(){
                $('#caption').removeClass('layar')
                $('#images-preview').addClass('layar')
            })
        })

        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let name = value.data('name')
            let image = value.data('image')

            let output = document.getElementById('output_image')
            output.src = '{{ asset("image_foto")}}'+'/'+image

            $('#name_img').html(image)

            $('#caption').addClass('layar')
            $('#images-preview').removeClass('layar')
            

            $('#id').val(id)
            $('#name').val(name)
            $('#image').val(image)
        }

        function reset_error(){
            $('#name_error').html('')
            $('#image_error').html('')
        }

        function reset(){
            $('#name').val('')
            $('#image').val('')

            $('#name_img').html('')
            $('#caption').removeClass('layar')
            $('#images-preview').addClass('layar')
        }

        function fetch_data(){

            $.ajax({
                url: "{{ url('admin/fotos/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.fotos, function(i, item){
                        output += `

                            <div class="col-md-4">
                                  <div class="card mb-3" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                      <div class="col-md-4">
                                        <img src="{{ asset('image_foto/${item.image}')}}" class="card-img" alt="Gambar Produk">
                                      </div>
                                      <div class="col-md-6">
                                        <div class="card-body">
                                          <h5 class="card-title" title="${this.name}">
                                          ${item.name.substring(0, 10)}... 
                                          </h5>
                                        </div>
                                      </div>
                                      <div class="col-md-1">
                                        <div class="card-body">
                                         <a href="#" id="handleEdit" data-id="${item.id}" data-name="${item.name}" data-image="${item.image}" class="text-info">
                                            <i class="fa fa-edit"></i>
                                          </a>
                                          <a href="#" id="handleDelete" data-id="${item.id}" url="{{ url('admin/fotos/destroy') }}" class="text-danger">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>

                        `
                     });

                    $('#load').html(output);
                    $('#loading-on').addClass('layar')
                    $('#loading-off').removeClass('layar')
                }
            });
        }

        function onInputChange(e)
        {
            let file = e.target.files[0]

            if(!file.type.match('image.*')){
                Toast.fire({
                      type: "error",
                      title: "Oopss...",
                      text: `${file.name} bukan gambar`
                    });
                return
              }

            let reader = new FileReader()
            reader.onload = () => {
                let output = document.getElementById('output_image')
                output.src = reader.result
                $('#image').val(reader.result)
                $('#name_img').html(file.name)
                $('#size_img').html(file.size)


                $('#caption').addClass('layar')
                $('#images-preview').removeClass('layar')
            }
            reader.readAsDataURL(file);
        }

    </script>
@endsection
