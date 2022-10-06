<div class="modal-dialog modal-dialog-centered mw-700px" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('VariationTemplateController@store'), 'method' => 'post', 'id' => 'variation_add_form', 'class' => 'form-horizontal' ]) !!}
    <div class="modal-header">
{{--      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
      <h4 class="modal-title">@lang('lang_v1.add_variation')</h4>
      <span class="svg-icon svg-icon-1">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
				<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
			</svg>
		</span>
    </div>

    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
      <div class="row g-9 mb-1 mt-1">
        <div class="form-group">
          {!! Form::label('name',__('lang_v1.variation_name'), ['class' => 'required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2 control-label']) !!}

          <div class="col-sm-12">
            {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __('lang_v1.variation_name')]); !!}
          </div>
        </div>
        <div class="d-flex gap-1">
          <label class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2">@lang('lang_v1.add_variation_values'):*</label>
          <div class="col-sm-7">
            {!! Form::text('variation_values[]', null, ['class' => 'form-control', 'required']); !!}
          </div>
          <div class="col-sm-2">
            <button type="button" class="btn btn-primary" id="add_variation_values">+</button>
          </div>
        </div>
        <div class="gap-1" id="variation_values"></div>
      </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang('messages.save')</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang('messages.close')</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->