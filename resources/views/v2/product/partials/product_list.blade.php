@php
    $colspan = 15;
    $custom_labels = json_decode(session('business.custom_labels'), true);
@endphp
<div class="card">
    @include('v2.metronic.tools.datatable-header')
    <div class="card-body pt-0">
        <table class="table metronic-datatable" data-export-file-name="Products">
    <thead>
        <tr>
            <th><input type="checkbox" id="select-all-row" data-table-id="product_table"></th>
            <th class="min-w-200px">@lang('sale.product')</th>
            <th>@lang('messages.action')</th>
            <th>@lang('purchase.business_location') @show_tooltip(__('lang_v1.product_business_location_tooltip'))</th>
            @can('view_purchase_price')
                @php
                    $colspan++;
                @endphp
                <th>@lang('lang_v1.unit_perchase_price')</th>
            @endcan
            @can('access_default_selling_price')
                @php
                    $colspan++;
                @endphp
                <th>@lang('lang_v1.selling_price')</th>
            @endcan
            <th>@lang('report.current_stock')</th>
            <th>@lang('product.product_type')</th>
            <th>@lang('product.category')</th>
            <th>@lang('product.brand')</th>
            <th>@lang('product.tax')</th>
            <th>@lang('product.sku')</th>
            <th>{{ $custom_labels['product']['custom_field_1'] ?? __('lang_v1.product_custom_field1') }}</th>
            <th>{{ $custom_labels['product']['custom_field_2'] ?? __('lang_v1.product_custom_field2') }}</th>
            <th>{{ $custom_labels['product']['custom_field_3'] ?? __('lang_v1.product_custom_field3') }}</th>
            <th>{{ $custom_labels['product']['custom_field_4'] ?? __('lang_v1.product_custom_field4') }}</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($rows[0]))
        @foreach($rows as $key => $row)
        <tr>
            <td><input type="checkbox"></td>
            <td>
                <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="#" class="symbol symbol-50px">
                    <span class="symbol-label" style="background-image:url({{ $row->image_url }});"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                    <!--begin::Title-->
                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">{{ $row->product }}</a>
                    <!--end::Title-->
                    </div>
                </div>
            <td>{!! $row->action !!}</td>
            <td>{{ $row->product_locations }}</td>
            @can('view_purchase_price')
            <td>{!! $row->purchase_price !!}</td>
            @endcan
            @can('access_default_selling_price')
            <td>{!! $row->selling_price !!}</td>
            @endcan
            <td>{{ $row->current_stock }}</td>
            <td>{{ $row->type }}</td>
            <td>{{ $row->category }}</td>
            <td>{{ $row->brand }}</td>
            <td>{{ $row->tax }}</td>
            <td>{{ $row->sku }}</td>
            <td>{{ $row->product_custom_field1 }}</td>
            <td>{{ $row->product_custom_field2 }}</td>
            <td>{{ $row->product_custom_field3 }}</td>
            <td>{{ $row->product_custom_field4 }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
    {{-- <tfoot>
        <tr>
            <td colspan="{{$colspan}}">
            <div style="display: flex; width: 100%;">
                @can('product.delete')
                    {!! Form::open(['url' => action('ProductController@massDestroy'), 'method' => 'post', 'id' => 'mass_delete_form' ]) !!}
                    {!! Form::hidden('selected_rows', null, ['id' => 'selected_rows']); !!}
                    {!! Form::submit(__('lang_v1.delete_selected'), array('class' => 'btn btn-sm btn-danger', 'id' => 'delete-selected')) !!}
                    {!! Form::close() !!}
                @endcan

                    @if(config('constants.enable_product_bulk_edit'))
                        @can('product.update')
                        &nbsp;
                            {!! Form::open(['url' => action('ProductController@bulkEdit'), 'method' => 'post', 'id' => 'bulk_edit_form' ]) !!}
                            {!! Form::hidden('selected_products', null, ['id' => 'selected_products_for_edit']); !!}
                            <button type="submit" class="btn btn-sm btn-primary" id="edit-selected"> <i class="fa fa-edit"></i>{{__('lang_v1.bulk_edit')}}</button>
                            {!! Form::close() !!}
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-success update_product_location" data-type="add">@lang('lang_v1.add_to_location')</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm bg-navy update_product_location" data-type="remove">@lang('lang_v1.remove_from_location')</button>
                        @endcan
                    @endif
                    &nbsp;
                    {!! Form::open(['url' => action('ProductController@massDeactivate'), 'method' => 'post', 'id' => 'mass_deactivate_form' ]) !!}
                    {!! Form::hidden('selected_products', null, ['id' => 'selected_products']); !!}
                    {!! Form::submit(__('lang_v1.deactivate_selected'), array('class' => 'btn btn-sm btn-warning', 'id' => 'deactivate-selected')) !!}
                    {!! Form::close() !!} @show_tooltip(__('lang_v1.deactive_product_tooltip'))
                    </div>
                </td>
            </tr>
        </tfoot> --}}
    </table>
    </div>
</div>