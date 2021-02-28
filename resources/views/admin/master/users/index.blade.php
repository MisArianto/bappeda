@extends('layouts.master')

@section('title', 'Admin Users')

@section('content')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary float-right btn-sm" id="btn-tambah">
            <i class="fa fa-plus"></i>
            Add New
        </button>
    </div>
    <div class="card-body row">
        <div class="col-md-4 offset-md-8 mb-4">
            <input type="text" class="form-control" name="search" placeholder="Search">
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Level</th>
                            <th>FB</th>
                            <th>IG</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-info btn-sm" id="handleEdit" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-username="{{ $user->username }}" data-email="{{ $user->email }}" data-level="{{ $user->level }}" data-fb="{{ $user->fb }}" data-ig="{{ $user->ig }}" title="Edit {{ $user->name }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" id="handleDelete" data-id="{{ $user->id }}" title="Delete {{ $user->name }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td>{{ $user->level }}</td>
                            <td>{{ $user->fb }}</td>
                            <td>{{ $user->ig }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@include('admin.master.users._modal')
@endsection

@section('scripts')
    
    <script>

        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#btn-simpan-user',function(e){
                e.preventDefault()

                let url = $('#form').attr('url')

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: $('#form').serialize(),
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

            $(document).on('click', '#btn-update-user', function(e){
                e.preventDefault()
                let id = $('#id').val()

                let url = $('#form').attr('urlUpdate')

                $.ajax({
                    type: 'PUT',
                    url: `${url}/${id}`,
                    data: $('#form').serialize(),
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
            let name = value.data('name')
            let username = value.data('username')
            let email = value.data('email')
            let level = value.data('level')
            let fb = value.data('fb')
            let ig = value.data('ig')

         
            $('#id').val(id)
            $('#name').val(name)
            $('#username').val(username)
            $('#email').val(email)
            $('#level').val(level)
            $('#fb').val(fb)
            $('#ig').val(ig)
        }


        function reset_error(){
            $('#name_error').html('')
            $('#username_error').html('')
            $('#email_error').html('')
            $('#password_error').html('')
            $('#level_error').html('')
            $('#fb_error').html('')
            $('#ig_error').html('')
        }

        function reset(){
            $('#name').val('')
            $('#username').val('')
            $('#email').val('')
            $('#level').val('')
            $('#fb').val('')
            $('#ig').val('')
        }
    </script>

@endsection
