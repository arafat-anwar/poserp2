@extends('v2.metronic.index')
@section('title', __('lang_v1.sales_commission_agents'))

@section('content')

<!-- Main content -->
<section class="content">
    @component('v2.components.widget', ['class' => 'box-primary','title' => __( 'lang_v1.sales_commission_agents' )])
        @can('user.create')
            @slot('tool')
                <div class="card-toolbar">
                    <button type="button" class="btn btn-primary btn-modal pull-right btn-sm"
                        data-href="{{action('SalesCommissionAgentController@create')}}" data-container=".commission_agent_modal"><i class="fa fa-plus"></i> @lang( 'messages.add' )</button>
                </div>
            @endslot
        @endcan
        @can('user.view')
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="sales_commission_agent_table">
                    <thead>
                        <tr>
                            <th>@lang( 'user.name' )</th>
                            <th>@lang( 'business.email' )</th>
                            <th>@lang( 'lang_v1.contact_no' )</th>
                            <th>@lang( 'business.address' )</th>
                            <th>@lang( 'lang_v1.cmmsn_percent' )</th>
                            <th>@lang( 'messages.action' )</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endcan
    @endcomponent

    <div class="modal fade commission_agent_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->

@endsection
@section('javascript')

<script type="text/javascript">
    $('.closeModal').click(function() {
        $('.commission_agent_modal').modal('hide');
    });
</script>
@endsection