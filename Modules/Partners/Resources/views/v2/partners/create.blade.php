<div class="modal-dialog modal-dialog-centered mw-700px" role="document">
    <div class="modal-content">

        {!! Form::open(['url' => action('\Modules\Partners\Http\Controllers\PartnersController@store'), 'method' => 'post' ]) !!}

        <div class="modal-header">
{{--            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
            <h4 class="modal-title">إضافة شريك</h4>
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
            <div class="form-group">
                {!! Form::label('name','إسم الشريك :*', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::text('name', null, ['class' => 'form-control form-control-solid', 'required', 'placeholder' =>'الإسم' ]); !!}
            </div>

            <div class="form-group">
                {!! Form::label('address',' العنوان :*', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::text('address', null, ['class' => 'form-control form-control-solid', 'required', 'placeholder' =>'العنوان' ]); !!}
            </div>

            <div class="form-group">
                {!! Form::label('mobile',' رقم الموبيل :', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::text('mobile', null, ['class' => 'form-control form-control-solid','placeholder' =>'رقم المبيل']); !!}
            </div>

            <div class="form-group">
                {!! Form::label('capital','قيمة رأس المال :', 'class="d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::text('capital', null, ['class' => 'form-control form-control-solid','placeholder' =>'قيمة رأس المال']); !!}
            </div>

            <div class="form-group">
                {!! Form::label('share','عدد الأسهم :', 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
                {!! Form::text('share', null, ['class' => 'form-control form-control-solid','placeholder' =>'عدد الأسهم']); !!}
            </div>


        </div>
        <div class="text-center modal-footer">
            <button type="submit" class="btn btn-primary">@lang( 'messages.save' )</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">@lang( 'messages.close' )</button>
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