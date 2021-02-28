 $(document).ready(function(){

    $(document).on('click', '#btn-tambah', function(){
        $('#title-tambah').removeClass('layar')
        $('#title-edit').addClass('layar')
        $('#btn-simpan').removeClass('layar')
        $('#btn-simpan-post').removeClass('layar')
        $('#btn-simpan-user').removeClass('layar')
        $('#btn-update').addClass('layar')
        $('#btn-update-post').addClass('layar')
        $('#btn-update-user').addClass('layar')
        $('#id').addClass('layar')

        reset()

        $('#myModal').modal('show')
    })

    $(document).on('click', '#btn-simpan',function(e){
        e.preventDefault()

        let token = {
                "_token": $('#token').val()
        };

        let url = $('#form').attr('url')

        $.ajax({
            type: 'POST',
            url: url,
            data: $('#form').serialize(),
            headers: token,
            success: function(res){
                Toast.fire({
                    type: "success",
                    title: `Tambah data success`
                  });

                fetch_data()
                reset()
                reset_error()

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

    $(document).on('click', '#handleEdit', function(){
        longValueEdit($(this))

        $('#title-tambah').addClass('layar')
        $('#title-edit').removeClass('layar')
        $('#btn-simpan').addClass('layar')
        $('#btn-simpan-post').addClass('layar')
        $('#btn-simpan-user').addClass('layar')
        $('#btn-update').removeClass('layar')
        $('#btn-update-post').removeClass('layar')
        $('#btn-update-user').removeClass('layar')
        $('#id').removeClass('layar')

        $('#myModal').modal('show')

    })

    $(document).on('click', '#btn-update', function(e){
        e.preventDefault()
        let id = $('#id').val()

        let url = $('#form').attr('urlUpdate')

        let token = {
                "_token": $('#token').val()
            };

        $.ajax({
            type: 'PUT',
            url: `${url}/${id}`,
            data: $('#form').serialize(),
            headers: token,
            success: function(res){

                fetch_data()
                reset()
                reset_error()
                $('#myModal').modal('hide')
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

    $(document).on('click', '#handleDelete', function(){
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

                        fetch_data()
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


 
$('.select2').select2({
    themes: "classic"
});


function ConfirmDelete() {
    var x = confirm("Yakin akan menghapus data?");
    if (x) return true; else return false;
}

function showPassword()
{
  let x = document.getElementById("password");
  let element = document.getElementById("iconPassword");

  if (x.type === "password") {
    x.type = "text";
    element.classList.remove("fa-eye-slash");
    element.classList.add("fa-eye");
  } else {
    x.type = "password";
    element.classList.remove("fa-eye");
    element.classList.add("fa-eye-slash");
  }
}



