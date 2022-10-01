@extends('v2.metronic.index')
@section('title', __('superadmin::lang.superadmin') . ' | ' . __('superadmin::lang.packages'))

@section('content')

<div class="form d-flex flex-column flex-lg-row">
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 card card-flush p-5">
<!-- Content Header (Page header) -->
	<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
		<!--begin::Title-->
		<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">@lang('superadmin::lang.packages') <small>@lang('superadmin::lang.add_package')</small></h1>
		<!--end::Title-->
		<!--end::Breadcrumb-->
	</div>

<!-- Main content -->
<section class="content">

	<!-- Page level currency setting -->
	<input type="hidden" id="p_code" value="{{$currency->code}}">
	<input type="hidden" id="p_symbol" value="{{$currency->symbol}}">
	<input type="hidden" id="p_thousand" value="{{$currency->thousand_separator}}">
	<input type="hidden" id="p_decimal" value="{{$currency->decimal_separator}}">

	{!! Form::open(['url' => action('\Modules\Superadmin\Http\Controllers\PackagesController@store'), 'method' => 'post', 'id' => 'add_package_form']) !!}

	<div class="box box-solid">
		<div class="box-body">
			<div class="row">
				
				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('name', __('messages.name').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('messages.name'), 'required']); !!}
					</div>
				</div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('description', __('superadmin::lang.description').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => __('superadmin::lang.description'), 'required']); !!}
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('location_count', __('superadmin::lang.location_count').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('location_count', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.location_count'), 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('user_count', __('superadmin::lang.user_count').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('user_count', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.user_count'), 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('product_count', __('superadmin::lang.product_count').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('product_count', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.product_count'), 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('invoice_count', __('superadmin::lang.invoice_count').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('invoice_count', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.invoice_count'), 'required', 'min' => 0]); !!}

						<span class="help-block">
							@lang('superadmin::lang.infinite_help')
						</span>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('interval', __('superadmin::lang.interval').':', 'class="form-label ppt-2 mt-2"') !!}

						{!! Form::select('interval', $intervals, null, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select'), 'required']); !!}
					</div>
				</div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('interval_count	', __('superadmin::lang.interval_count').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('interval_count', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.interval_count'), 'required', 'min' => 1]); !!}
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('trial_days	', __('superadmin::lang.trial_days').':', 'class="form-label ppt-2 mt-2"') !!}
						{!! Form::number('trial_days', null, ['class' => 'form-control','placeholder' => __('superadmin::lang.trial_days'), 'required', 'min' => 0]); !!}
					</div>
				</div>
{{--				<div class="input-group mb-5">--}}
{{--					<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"/>--}}
{{--					<span class="input-group-text" id="basic-addon2">--}}
{{--						<i class="fas fa-envelope-open-text fs-4"></i>--}}
{{--					</span>--}}
{{--				</div>--}}

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('price', __('superadmin::lang.price').':', 'class="form-label pt-2 mt-2"') !!}
						@show_tooltip(__('superadmin::lang.tooltip_pkg_price'))

						<div class="input-group">
							<span class="input-group-text" id="basic-addon2"><b>{{$currency->code}} {{$currency->symbol}}</b></span>
							{!! Form::text('price', null, ['class' => 'form-control input_number', 'required']); !!}
						</div>
						<span class="form-label">
							0 = @lang('superadmin::lang.free_package')
						</span>
					</div>
				</div>
				
				<div class="clearfix"></div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="form-group">
						{!! Form::label('sort_order	', __('superadmin::lang.sort_order').':', 'class="form-label pt-2 mt-2"') !!}
						{!! Form::number('sort_order', 1, ['class' => 'form-control', 'required']); !!}
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="col-sm-6 mb-3 fv-row">
					<div class="checkbox">
					<label>
						{!! Form::checkbox('is_private', 1, false, ['class' => 'input-icheck']); !!}
                        {{__('superadmin::lang.private_superadmin_only')}}
					</label>
					</div>
				</div>

				<div class="col-sm-6 mb-3 fv-row">
					<div class="checkbox">
					<label>
						{!! Form::checkbox('is_one_time', 1, false, ['class' => 'input-icheck']); !!}
                        {{__('superadmin::lang.one_time_only_subscription')}}
					</label>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-4">
					<div class="checkbox">
					<label>
						{!! Form::checkbox('enable_custom_link', 1, false, ['class' => 'input-icheck', 'id' => 'enable_custom_link']); !!}
                        {{__('superadmin::lang.enable_custom_subscription_link')}}
					</label>
					</div>
				</div>
				<div id="custom_link_div" class="hide">
					<div class="col-sm-4">
						<div class="form-group">
							{!! Form::label('custom_link', __('superadmin::lang.custom_link').':', 'class="form-label pt-2 mt-2"') !!}
							{!! Form::text('custom_link', null, ['class' => 'form-control']); !!}
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							{!! Form::label('custom_link_text', __('superadmin::lang.custom_link_text').':', 'class="form-label pt-2 mt-2"') !!}
							{!! Form::text('custom_link_text', null, ['class' => 'form-control']); !!}
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row mt-5 mb-3 gap-0">
				@foreach($permissions as $module => $module_permissions)
					@foreach($module_permissions as $permission)
							<div class="col-sm-2">
								{!! Form::checkbox("custom_permissions[$permission[name]]", 1, $permission['default'], ['class' => 'form-check-input']); !!}
{{--								<input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"/>--}}
								<label class="form-check-label" for="flexCheckDefault">
									{{$permission['label']}}
								</label>
							</div>

{{--					<div class="row d-flex">--}}
{{--						<div class="checkbox">--}}
{{--						<label>--}}
{{--							{!! Form::checkbox("custom_permissions[$permission[name]]", 1, $permission['default'], ['class' => 'input-icheck']); !!}--}}
{{--	                        {{$permission['label']}}--}}
{{--						</label>--}}
{{--						</div>--}}
{{--					</div>--}}
					@endforeach
				@endforeach
				</div>
				<div class="col-sm-3">
					<div class="checkbox">
					<label>
						{!! Form::checkbox('is_active', 1, true, ['class' => 'input-icheck']); !!}
                        {{__('superadmin::lang.is_active')}}
					</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary pull-right btn-flat">@lang('messages.save')</button>
				</div>
			</div>

		</div>
	</div>

	{!! Form::close() !!}
</section>
</div>
</div>
@endsection

@section('javascript')
	<script type="text/javascript">
		$(document).ready(function(){
			$('form#add_package_form').validate();
		});
		$('#enable_custom_link').on('ifChecked', function(event){
		   $("div#custom_link_div").removeClass('hide');
		});
		$('#enable_custom_link').on('ifUnchecked', function(event){
		   $("div#custom_link_div").addClass('hide');
		});
	</script>
@endsection