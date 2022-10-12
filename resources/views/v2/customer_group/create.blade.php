<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('CustomerGroupController@store'), 'method' => 'post', 'id' => 'customer_group_add_form' ]) !!}

    <div class="modal-header">
{{--      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
      <h4 class="modal-title">@lang( 'lang_v1.add_customer_group' )</h4>
      <span class="svg-icon svg-icon-1 close cursor-pointer" data-dismiss="modal">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
				<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
			</svg>
		</span>
    </div>

    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-10 mt-8">
      <div class="form-group">
        {!! Form::label('name', __( 'lang_v1.customer_group_name' ),'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'lang_v1.customer_group_name' ) ]); !!}
      </div>

      <div class="form-group">
            {!! Form::label('price_calculation_type', __( 'lang_v1.price_calculation_type' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
            {!! Form::select('price_calculation_type',['percentage' => __('lang_v1.percentage'), 'selling_price_group' => __('lang_v1.selling_price_group')], 'percentage', ['class' => 'form-control']); !!}
      </div>

      <div class="form-group percentage-field">
        {!! Form::label('amount', __( 'lang_v1.calculation_percentage' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
        @show_tooltip(__('lang_v1.tooltip_calculation_percentage'))
        {!! Form::text('amount', null, ['class' => 'form-control input_number','placeholder' => __( 'lang_v1.calculation_percentage')]); !!}
      </div>

      <div class="form-group selling_price_group-field hide">
            {!! Form::label('selling_price_group_id', __( 'lang_v1.selling_price_group' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
            {!! Form::select('selling_price_group_id', $price_groups, null, ['class' => 'form-control']); !!}
      </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->