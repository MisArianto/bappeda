@extends('layouts.master')

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
                @include('admin.master.categories._table')
            </div>
        </div>
    </div>
</div>

@include('admin.master.categories._modal')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data()
        })

        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let category_name = value.data('name')
            

            $('#id').val(id)
            $('#category_name').val(category_name)
        }

        function reset_error(){
            $('#category_name_error').html('')
        }

        function reset(){
            $('#category_name').val('')
        }

        function fetch_data(){

            $.ajax({
                url: "{{ url('admin/master/categories/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.categories, function(i, item){
                        output += '<tr>';
                        output += '<td>'+parseInt(i+1)+'</td>';
                        output += '<td>';

                        output += '<div class="btn-group"><button class="btn btn-info btn-sm" id="handleEdit" data-id="'+item.id+'" data-name="'+item.category_name+'" title="edit '+ item.category_name +'"><i class="fa fa-edit cursor"></i></button>';
                        if(window.user.level === 'admin'){
                        output += '<button class="btn btn-danger btn-sm" id="handleDelete" data-id="'+item.id+'" url="{{ url('admin/master/categories/destroy') }}" title="delete '+ item.category_name +'"><i class="fa fa-trash cursor"></i></button>'
                        }
                        

                        output += '</div>';

                        output += '<td>'+item.category_name+'</td>';
                        
                        output += '</tr>'
                     });

                    $('#load').html(output);
                    $('#loading-on').addClass('layar')
                    $('#loading-off').removeClass('layar')
                }
            });
        }
    </script>
@endsection
