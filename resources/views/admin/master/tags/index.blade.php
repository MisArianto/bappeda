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
                @include('admin.master.tags._table')
            </div>
        </div>
    </div>
</div>

@include('admin.master.tags._modal')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data()
        })

        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let tag_name = value.data('name')
            

            $('#id').val(id)
            $('#tag_name').val(tag_name)
        }

        function reset_error(){
            $('#tag_name_error').html('')
        }

        function reset(){
            $('#tag_name').val('')
        }

        function fetch_data(){

            $.ajax({
                url: "{{ url('admin/master/tags/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.tags, function(i, item){
                        output += '<tr>';
                        output += '<td>'+parseInt(i+1)+'</td>';
                        output += '<td>';

                        output += '<div class="btn-group"><button class="btn btn-info btn-sm" id="handleEdit" data-id="'+item.id+'" data-name="'+item.tag_name+'" title="edit '+ item.tag_name +'"><i class="fa fa-edit cursor"></i></button>';
                        if(window.user.level === 'admin'){
                        output += '<button class="btn btn-danger btn-sm" id="handleDelete" data-id="'+item.id+'" url="{{ url('admin/master/tags/destroy') }}" title="delete '+ item.tag_name +'"><i class="fa fa-trash cursor"></i></button>'

                        }
                        

                        output += '</div>';

                        output += '<td>'+item.tag_name+'</td>';
                        
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
