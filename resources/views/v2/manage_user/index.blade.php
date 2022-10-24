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
    <div class="card">
        @include('v2.metronic.tools.datatable-header')
        <div class="card-body pt-0">
            <table class="table metronic-datatable" data-export-file-name="Users">
                <thead>
                    <tr>
                        <th>@lang( 'business.username' )</th>
                        <th>@lang( 'user.name' )</th>
                        <th>@lang( 'user.role' )</th>
                        <th>@lang( 'business.email' )</th>
                        <th>@lang( 'messages.action' )</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($rows[0]))
                    @foreach($rows as $key => $row)
                    <tr>
                        <td>{!! $row->username !!}</td>
                        <td>{{ $row->full_name }}</td>
                        <td>{{ $row->role }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{!! glyphiconToFa($row->action) !!}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endcan
    @endcomponent

    <div class="modal fade user_modal" tabindex="-1" role="dialog" 
        aria-labelledby="gridSystemModalLabel">
    </div>
</section>
@stop
@section('javascript')
<script type="text/javascript">
    $(document).on('click', '.user_modal .close', function () {
        $('.user_modal').modal('toggle');
    });

    $(document).ready( function(){
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
</script>
@endsection
