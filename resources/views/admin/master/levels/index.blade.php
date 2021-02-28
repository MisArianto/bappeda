@extends('layouts.master')

@section('title', 'Admin Level')

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
                @include('admin.master.levels._table')
            </div>
        </div>
    </div>
</div>

@include('admin.master.levels._modal')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data()
        })

        // All function
        function longValueEdit(value){
            let id = value.data('id')
            let id_role = value.data('id_role')
            let nama_level = value.data('nama_level')
            

            $('#id').val(id)
            $('#id_role').val(id_role)
            $('#nama_level').val(nama_level)
        }

        function reset_error(){
            $('#id_role_error').html('')
            $('#nama_level_error').html('')
        }

        function reset(){
            $('#id_role').val('')
            $('#nama_level').val('')
        }

        function fetch_data(){

            $.ajax({
                url: "{{ url('admin/master/levels/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.levels, function(i, item){
                        output += `<tr>
                                    <td>${parseInt(i+1)}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-info btn-sm" id="handleEdit" data-id="${item.id}" data-id_role="${item.id_role}" data-nama_level="${item.nama_level}" title="edit ${item.nama_level}">
                                                <i class="fa fa-edit cursor"></i>
                                            </button>`

                                            if(window.user.level === 'admin'){
                                            output += `<button class="btn btn-danger btn-sm" id="handleDelete" data-id="${item.id}" url="{{ url('admin/master/level/destroy') }}" title="delete ${item.nama_level}">
                                                <i class="fa fa-trash cursor"></i>
                                            </button>`
                                        }
                            output += `</div>
                                    <td>${item.id_role}</td>
                                    <td>${item.nama_level}</td>
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
