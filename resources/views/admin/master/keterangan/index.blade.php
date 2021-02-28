@extends('layouts.master')

@section('title', 'Tahun Dokumen')

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
            @include('admin.master.keterangan._table') 
        </div>
    </div>
</div>

@include('admin.master.keterangan._modal')
@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function(){
       
          fetch_data()
            
        })

        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let name = value.data('name')

         
            $('#id').val(id)
            $('#name').val(name)
        }

        function reset_error(){
            $('#name_error').val('')
        }

        function reset(){
            $('#name').val('')
        }

        function fetch_data(){

            $.ajax({
                url: "{{ url('admin/master/keterangan/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.docs, function(i, item){
                        output += `
                          <tr>
                            <td>${parseInt(i+1)}</td>
                            <td>
                              <div class="btn-group"><button class="btn btn-info btn-sm" id="handleEdit" data-id="${item.id}" data-name="${item.name}" title="edit ${item.name}"><i class="fa fa-edit cursor"></i></button>`
                                if(window.user.level === 'admin'){
                                output += `<button class="btn btn-danger btn-sm" id="handleDelete" data-id="${item.id}" url="{{ url('admin/master/keterangan/destroy') }}" title="delete ${item.name}"><i class="fa fa-trash cursor"></i></button>`
                              }
                            output += `</td>
                              <td>${item.name}</td>
                          </tr>`
                     });

                    $('#load').html(output);
                    $('#loading-on').addClass('layar')
                    $('#loading-off').removeClass('layar')
                }
            });
        }

    </script>
@endsection
