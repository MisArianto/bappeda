@extends('layouts.master')

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

@section('title', 'Dashboard Posts')

@section('content')

<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-right btn-sm" id="btn-tambah">
            <i class="fa fa-plus"></i>
            Add New
        </button>
    </div>
    <div class="card-body row">
        <div class="col-md-12">
            @include('admin.master.contact._table') 
        </div>
    </div>
</div>

@include('admin.master.contact._modal')
@endsection

@section('scripts')
    <script type="text/javascript">

        CKEDITOR.replace('editor');

        $(document).ready(function(){
        $('.multiple-select').select2();
       
            $(document).on('click', '#close', function(){
                $('#caption').removeClass('layar')
                $('#images-preview').addClass('layar')
            })

            $.ajaxSetup({
      			    headers: {
      			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      			    }
      			});

            $(document).on('click', '#btn-simpan-post',function(e){
		        e.preventDefault()

		        let url = $('#form').attr('url')
		      
		        let content = CKEDITOR.instances['editor'].getData();

		        let obj = {
		        	content: content
		        }

		        $.ajax({
		            type: 'POST',
		            url: url,
		            data: obj,
		            success: function(res){

		                Toast.fire({
		                    type: "success",
		                    title: `Tambah data success`
		                  });

		                reset()
		                reset_error()
		                window.location.reload()

		            },
		            error: function(data)
		            {
		                reset_error()
		                let errors = data.responseJSON

		                Toast.fire({
		                    type: "error",
		                    title: `${errors.message}`
		                  });

		                $.each(errors.errors, function(k, v){
		                    $('#'+k+'_error').html(v)
		                })
		            }
		        })
		    })

		    $(document).on('click', '#btn-update-post', function(e){
		        e.preventDefault()
		        let id = $('#id').val()

		        let url = $('#form').attr('urlUpdate')

		        let content = CKEDITOR.instances['editor'].getData();

		        let obj = {
		        	content: content
		        }

		        $.ajax({
		            type: 'PUT',
		            url: `${url}/${id}`,
		            data: obj,
		            success: function(res){

		                reset()
		                reset_error()
		                $('#myModal').modal('hide')
		                 Toast.fire({
		                    type: "success",
		                    title: `Update Success`,
		                  });

		                 window.location.reload()

		            },
		            error: function(data)
		            {

		                reset_error()
		                let errors = data.responseJSON

		                Toast.fire({
		                    type: "error",
		                    title: `${errors.message}`
		                  });

		                $.each(errors.errors, function(k, v){
		                    $('#'+k+'_error').html(v)
		                })
		            }
		        })

		    })
            
        })

        
        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let editor = value.data('editor')

         
            $('#id').val(id)
            CKEDITOR.instances['editor'].setData(editor);
        }

        function reset_error(){
            $('#editor_error').val('')
        }

        function reset(){
            $('#editor').val('')
        }

    </script>
@endsection
