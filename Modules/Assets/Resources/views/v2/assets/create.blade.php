<div class="modal-dialog modal-dialog-centered mw-900px" role="document">
    <div class="modal-content">

        {!! Form::open(['url' => action('\Modules\Assets\Http\Controllers\AssetsController@store'), 'method' => 'post', 'class' => 'form' ]) !!}

        <div class="modal-header">
            {{--            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
            <h2>@lang( 'assets::lang.asset_add' )</h2>
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

        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">

            <div class="row g-9 mb-1 mt-1">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('assetcode', __( 'assets::lang.asset_code' ) . ':', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        {!! Form::text('assetcode', null, ['class' => 'form-control form-control-solid', 'placeholder' => __( 'assets::lang.asset_code'), 'required' ]); !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('quantity', __( 'assets::lang.asset_quantity' ) . ':', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        {!! Form::text('quantity', null, ['class' => 'form-control form-control-solid', 'placeholder' => __( 'assets::lang.asset_quantity'), 'required' ]); !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', __( 'assets::lang.asset_description' ) . ':', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control form-control-solid', 'required', 'placeholder' => __( 'assets::lang.asset_description'), 'rows' => 3 ]); !!}
            </div>

            <div class="row">
                <div class="col-lg-6">
                    {!! Form::label('location_id', __( 'assets::lang.asset_location' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                    {!! Form::select('location_id',$business_locations,null,['class'=>'form-control']) !!}

                </div>

                <div class="col-lg-6">
                    {!! Form::label('purchasedate', __('assets::lang.asset_purchase_date') . ':', 'class="d-flex required align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-calendar fs-4"></i>
                        </span>
                        {!! Form::text('purchasedate', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control date-picker', 'readonly','placeholder' => __( 'assets::lang.asset_purchase_date'), 'required' ]); !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('type',__('assets::lang.asset_type'), 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        <div class="input-group">
                            <select id="type" name="type" class="form-control">
                                <option value="-1">@lang('assets::lang.asset_type_consumed')</option>
                                <option value="1">@lang('assets::lang.asset_type_up')</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('consume_rate', __( 'assets::lang.asset_consume_rate' ) . ' : ', 'class="d-flex required align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        {!! Form::text('consume_rate', null, ['class' => 'form-control form-control-solid','placeholder' => __( 'assets::lang.asset_consume_rate'), 'required' ,'style'=>'max-width:90%;']); !!}
                    </div>
                </div>
            </div>


            <div class="row" style="margin-right: 0px">
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('price', __( 'assets::lang.asset_price' ) . ':', 'class="d-flex required align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        {!! Form::text('price', null, ['class' => 'form-control form-control-solid', 'placeholder' => __( 'assets::lang.asset_price'), 'required']); !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        {!! Form::label('curentprice', __( 'assets::lang.asset_curentprice' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                        {!! Form::text('curentprice', null, ['class' => 'form-control form-control-solid', 'placeholder' => __( 'assets::lang.asset_curentprice'), 'required' ]); !!}
                    </div>
                </div>
            </div>




            <div class="form-group">
                {!! Form::label('changedate', __('assets::lang.asset_changedate') . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-calendar fs-4"></i>
                        </span>
                    {!! Form::text('changedate', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control date-picker', 'placeholder' => __( 'assets::lang.asset_changedate'), 'readonly']); !!}
                </div>
            </div>


            <div class="form-group " style="display: none;">
                {!! Form::label('status',__('assets::lang.asset_status'), 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                <div class="input-group">
                    <select id="status" name="status" class="form-control">
                        <option value="0">@lang('assets::lang.asset_Existing')</option>
                        <option value="1">@lang('assets::lang.asset_consumed')</option>
                        <option value="2">@lang('assets::lang.asset_sold')</option>
                        <option value="3">@lang('assets::lang.asset_missing')</option>
                    </select>

                </div>
            </div>


            <div class="form-group">
                {!! Form::label('notes', __( 'assets::lang.asset_notes' ) . ':', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::textarea('notes',null, ['class' => 'form-control form-control-solid', 'placeholder' => __( 'assets::lang.asset_notes'), 'rows' => 3]); !!}
            </div>

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
        </div>

        {!! Form::close() !!}

    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script>
    $('.date-picker').datepicker({
        autoclose: true,
        endDate: 'today',
        format:'yyyy-m-d',
    });
</script>