@extends('layouts.master')

@section('title', 'Admin Message')

@section('content')

<div class="text-center" id="loading-on">
    @include('layouts._loading')
</div>

<div class="layar" id="loading-off">
    <div class="card">
        <div class="card-header">
          <h4>Messages</h4>
        </div>
        <div class="card-body row">
            <div class="col-md-12">
                @include('user.message._table')
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            fetch_data()

        })

        

        function fetch_data(){

            $.ajax({
                url: "{{ url('user/message/fetch') }}",
                dataType: 'json',
                success: function(res)
                {
                    let output = ''

                     $.each(res.datas, function(i, item){
                        output += `
                          <tr>
                            <td>${parseInt(i+1)}</td>
                            <td>${item.name}</td>
                            <td>${item.email}</td>
                            <td>${item.subject}</td>
                            <td>${item.message}</td>
                            <td>
                              <button class="btn btn-danger btn-sm" data-id="${item.id}" id="handleDelete">
                                <i class="fa fa-trash"></i>
                              </button>
                            </td>
                          </tr>
                        `
                     });

                    $('#load').html(output);
                    $('#loading-on').addClass('layar')
                    $('#loading-off').removeClass('layar')
                }
            });
        }

    </script>
@endsection
