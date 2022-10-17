@extends('v2.metronic.index')
@section('title', __('user.roles'))

@section('content')

<section class="content">
    @component('v2.components.widget', ['class' => '', 'title' => __( 'user.all_roles' )])
    @can('roles.create')
    @slot('tool')
    <div class="card-toolbar">
        <a href="{{action('RoleController@create')}}" class="btn btn-primary font-weight-bolder btn-sm">
            <i class="fa fa-plus"></i> @lang( 'messages.add' )</a>
        </div>
        @endslot
        @endcan
        @can('user.view')
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="roles_table">
                <thead>
                    <tr>
                        <th>@lang( 'user.roles' )</th>
                        <th>@lang( 'messages.action' )</th>
                    </tr>
                </thead>
            </table>
        </div>
        @endcan
        @endcomponent
    </section>


    @stop
    @section('javascript')
    <script type="text/javascript">
    //Roles table
    $(document).ready( function(){
        var roles_table = $('#roles_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/roles',
            buttons:[],
            columnDefs: [ {
                "targets": 1,
                "orderable": false,
                "searchable": false
            } ]
        });
        $(document).on('click', 'button.delete_role_button', function(){
            swal({
              title: LANG.sure,
              text: LANG.confirm_delete_role,
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
                            roles_table.ajax.reload();
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