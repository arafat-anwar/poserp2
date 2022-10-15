@extends('v2.metronic.index')
@section('title', __( 'user.users' ))

@section('content')


<section class="content">
    @component('v2.components.widget', ['class' => '', 'title' => __( 'user.manage_users' )])
    @can('user.create')
    @slot('tool')
    <div class="card-toolbar">
        <a href="{{action('ManageUserController@create')}}" class="btn btn-primary font-weight-bolder btn-sm">
            <i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
        </div>
        @endslot
        @endcan
        @can('user.view')
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="users_table">
                <thead>
                    <tr>
                        <th>@lang( 'business.username' )</th>
                        <th>@lang( 'user.name' )</th>
                        <th>@lang( 'user.role' )</th>
                        <th>@lang( 'business.email' )</th>
                        <th>@lang( 'messages.action' )</th>
                    </tr>
                </thead>
            </table>
        </div>
        @endcan
        @endcomponent

        <div class="modal fade user_modal" tabindex="-1" role="dialog" 
        aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->
@stop
@section('javascript')
<script type="text/javascript">

    $(document).on('click', '.user_modal .close', function () {
        $('.user_modal').modal('toggle');
    });
    //Roles table
    $(document).ready( function(){
        var users_table = $('#users_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/users',
            columnDefs: [ {
                "targets": [4],
                "orderable": false,
                "searchable": false
            } ],
            "columns":[
            {"data":"username"},
            {"data":"full_name"},
            {"data":"role"},
            {"data":"email"},
            {"data":"action"}
            ]
        });
        $(document).on('click', 'button.delete_user_button', function(){
            swal({
              title: LANG.sure,
              text: LANG.confirm_delete_user,
              icon: "warning",
              buttons: true,
              dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
                var href = $(this).data('href');
                var data = $(this).serialize();
                $.ajax({
                    method: "DELETE",
                    url: href,
                    dataType: "json",
                    data: data,
                    success: function(result){
                        if(result.success == true){
                            toastr.success(result.msg);
                            users_table.ajax.reload();
                        } else {
                            toastr.error(result.msg);
                        }
                    }
                });
            }
        });
      });
        
    });
    
    
</script>
@endsection
