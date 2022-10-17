<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('BrandController@store'), 'method' => 'post', 'id' => $quick_add ? 'quick_add_brand_form' : 'brand_add_form' ]) !!}

    <div class="modal-header">
{{--      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
      <h4 class="modal-title">@lang( 'brand.add_brand' )</h4>
      <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
        <span class="svg-icon svg-icon-1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
            </svg>
        </span>
        <!--end::Svg Icon-->
      </div>
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('name', __( 'brand.brand_name' ) . ':*') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'brand.brand_name' ) ]); !!}
      </div>

      <div class="form-group">
        {!! Form::label('description', __( 'brand.short_description' ) . ':') !!}
          {!! Form::text('description', null, ['class' => 'form-control','placeholder' => __( 'brand.short_description' )]); !!}
      </div>

        @if($is_repair_installed)
          <div class="form-group">
             <div class="form-check form-check-sm form-check-custom form-check-solid">
                {!!Form::checkbox('use_for_repair', 1, false, ['class' => 'input-icheck form-check-input']) !!}&nbsp;
                {{ __( 'repair::lang.use_for_repair' )}}&nbsp; @show_tooltip(__('repair::lang.use_for_repair_help_text'))
            </div>
          </div>
        @endif

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->