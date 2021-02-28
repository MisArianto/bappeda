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

        #editorjs{
        	background: salmon;
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
            @include('admin.posts.post._table') 
        </div>
    </div>
</div>

@include('admin.posts.post._modal')
@endsection

@section('scripts')
<!-- <script src="{{ asset('js/editor.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script> -->

    <script type="text/javascript">

    	// const editor = new EditorJS({
    	// 	holder: 'editorjs',
    	// 	autofocus: true,
    	// 	placeholder: 'Sampaikan Walupun Satu Ayat',
    	// 	tools: {
    	// 		header: {
	    // 			class: Header,
	    // 			inlineToolbar: ['link']
    	// 		},
    	// 		list: {
    	// 			class: List,
    	// 			inlineToolbar: [
    	// 				'link',
    	// 				'bold'
    	// 			]
    	// 		},
    	// 		raw: RawTool,
    	// 		quote: {
			  //     class: Quote,
			  //     inlineToolbar: true,
			  //     shortcut: 'CMD+SHIFT+O',
			  //     config: {
			  //       quotePlaceholder: 'Enter a quote',
			  //       captionPlaceholder: 'Quote\'s author',
			  //     },
			  //   }
    	// 	}
    	// });

    	// saveBtn.addEventListener('click', function(){
    	// 	editor.save().then((outputData) => {
    	// 		console.log('Artikel data',outputData)
    	// 	}).catch((error) => {
    	// 		console.log('Save failed', error)
    	// 	})
    	// })

      // var editor = new EditorJS('#editor');
      // var editor = new MediumEditor('.editable')

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
		        let tag = $('#tag').val();
		        let category_id = $('#category_id').val();
		        let judul = $('#judul').val();
		        let image = $('#image').val();
		        let content = CKEDITOR.instances['editor'].getData();

		        let obj = {
		        	tag: tag,
		        	category_id: category_id,
		        	judul: judul,
		        	image: image,
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

		        let tag = $('#tag').val();
		        let category_id = $('#category_id').val();
		        let judul = $('#judul').val();
		        let image = $('#image').val();
		        let content = CKEDITOR.instances['editor'].getData();

		        let obj = {
		        	tag: tag,
		        	category_id: category_id,
		        	judul: judul,
		        	image: image,
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
        

        $(document).on('click', '#handleDeletePost', function(){
            let id = $(this).data('id')
            let url = $(this).attr('url')

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
              }).then(result => {
                if (result.value) {
                  $.ajax({
                        type: 'GET',
                        url: `${url}/${id}`,
                        success: function(res){
                            window.location.reload()
                             Toast.fire({
                                type: "success",
                                title: `Delete Success`
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
                }
              });
        })
                
    })

        
        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let tag = value.data('tag')
            let category_id = value.data('category_id')
            let judul = value.data('judul')
            let editor = value.data('editor')
            let image = value.data('image')

            let output = document.getElementById('output_image')
            output.src = '{{ asset("image_posts")}}'+'/'+image

            $('#name_img').html(image)

            $('#caption').addClass('layar')
            $('#images-preview').removeClass('layar')

            $('#id').val(id)
            $('#tag').val(tag).change()
            $('#category_id').val(category_id)
            $('#judul').val(judul)
            CKEDITOR.instances['editor'].setData(editor);
        }

        function reset_error(){
            $('#tag_error').val('')
            $('#category_id_error').val('')
            $('#judul_error').val('')
            $('#editor_error').val('')
            $('#image_error').val('')
        }

        function reset(){
            $('#tag').val('')
            $('#category_id').val('')
            $('#judul').val('')
            CKEDITOR.instances['editor'].setData('');
            $('#image').val('')
            let output = document.getElementById('output_image')
            output.src = ''
            $('#caption').removeClass('layar')
            $('#images-preview').addClass('layar')
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
