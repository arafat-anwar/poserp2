<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('UnitController@store'), 'method' => 'post', 'id' => $quick_add ? 'quick_add_unit_form' : 'unit_add_form' ]) !!}

    <div class="modal-header">
{{--      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
      <h4 class="modal-title">@lang( 'unit.add_unit' )</h4>
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

    <div class="modal-body scroll-y px-3 px-lg-10 pt-0 pb-3">
      <div class="row g-3 mb-1 mt-1">
        <div class="col-sm-12">
          {!! Form::label('actual_name', __( 'unit.name' ), 'class="required d-flex align-items-center fs-6 fw-semibold mb-1 mt-1"') !!}
            {!! Form::text('actual_name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'unit.name' )]); !!}
        </div>

        <div class="col-sm-12">
          {!! Form::label('short_name', __( 'unit.short_name' ), 'class="required d-flex align-items-center fs-6 fw-semibold mb-1 mt-1"') !!}
            {!! Form::text('short_name', null, ['class' => 'form-control', 'placeholder' => __( 'unit.short_name' ), 'required']); !!}
        </div>

        <div class="col-sm-12">
          {!! Form::label('allow_decimal', __( 'unit.allow_decimal' ), 'class="required d-flex align-items-center fs-6 fw-semibold mb-1 mt-1"') !!}
            {!! Form::select('allow_decimal', ['1' => __('messages.yes'), '0' => __('messages.no')], null, ['placeholder' => __( 'messages.please_select' ), 'required', 'class' => 'form-control']); !!}
        </div>
        @if(!$quick_add)
          <div class="col-sm-12">
            <div class="form-group">
                <div class="checkbox">
                  <label class="align-items-center fs-6 fw-semibold mb-2 mt-2">
                     {!! Form::checkbox('define_base_unit', 1, false,[ 'class' => 'toggler form-check-input', 'data-toggle_id' => 'base_unit_div' ]); !!} &nbsp;&nbsp;@lang( 'lang_v1.add_as_multiple_of_base_unit' )
                  </label>  @show_tooltip(__('lang_v1.multi_unit_help'))
                </div>
            </div>
          </div>
          <div class="col-sm-12 hide" id="base_unit_div">
            <table class="table">
              <tr>
                <th style="vertical-align: middle;">1 <span id="unit_name">@lang('product.unit')</span></th>
                <th style="vertical-align: middle;">=</th>
                <td style="vertical-align: middle;">
                  {!! Form::text('base_unit_multiplier', null, ['class' => 'form-control input_number', 'placeholder' => __( 'lang_v1.times_base_unit' )]); !!}</td>
                <td style="vertical-align: middle;">
                  {!! Form::select('base_unit_id', $units, null, ['placeholder' => __( 'lang_v1.select_base_unit' ), 'class' => 'form-control']); !!}
                </td>
              </tr>
            </table>
          </div>
        @endif
      </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->