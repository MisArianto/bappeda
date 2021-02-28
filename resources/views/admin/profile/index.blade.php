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

@section('title', 'Dashboard Profile')

@section('content')

<div class="card">
    <div class="card-header">
      <h3>Profile</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-12">
            @include('admin.profile._form') 
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function(){

          fetch_data()

          $(document).on('click', '#close', function(){
              $('#caption').removeClass('layar')
              $('#images-preview').addClass('layar')
          })

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

  		    $(document).on('click', '#btn-update-profile', function(e){
  		        e.preventDefault()
  		        let id = $('#id').val()

  		        let url = $('#form').attr('url')

  		        let obj = {
  		        	content: content
  		        }

  		        $.ajax({
  		            type: 'PUT',
  		            url: `${url}/${id}`,
  		            data: $('#form').serialize(),
  		            success: function(res){

  		                reset_error()

  		                 Toast.fire({
  		                    type: "success",
  		                    title: `Update Success`,
  		                  });

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

        function fetch_data()
        {
          $('#id').val(window.user.id)
          $('#name').val(window.user.name)
          $('#username').val(window.user.username)
          $('#email').val(window.user.email)
          $('#fb').val(window.user.fb)
          $('#ig').val(window.user.ig)
          let image = $('#image').val(window.user.image)

          let output = document.getElementById('output_image')
          output.src = 'image_users/'+image

          $('#name_img').html(image)

          $('#caption').addClass('layar')
          $('#images-preview').removeClass('layar')
          $('#bio').val(window.user.bio)
        }


        function reset_error(){
            $('#name_error').val('')
            $('#username_error').val('')
            $('#email_error').val('')
            $('#fb_error').val('')
            $('#ig_error').val('')
            $('#image_error').val('')
            let output = document.getElementById('output_image')
            output.src = ''
            $('#caption').removeClass('layar')
            $('#images-preview').addClass('layar')
            $('#bio_error').val('')
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

                // console.log(reader.result)

                $('#caption').addClass('layar')
                $('#images-preview').removeClass('layar')
            }
            reader.readAsDataURL(file);
        }

    </script>
@endsection
