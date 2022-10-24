@extends('v2.metronic.index')
@section('title', 'Brands')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="col-md-10 offset-md-1 mt-2">
        @component('v2.components.widget', ['class' => 'box-primary', 'title' => __( 'brand.all_your_brands' )])
        @can('brand.create')
            @slot('tool')
                <div class="box-tools">
                    <button type="button" class="btn btn-block btn-primary btn-modal" 
                        data-href="{{action('BrandController@create')}}" 
                        data-container=".brands_modal">
                        <i class="fa fa-plus"></i> @lang( 'messages.add' )</button>
                </div>
            @endslot
        @endcan
        @can('brand.view')
            <div class="card">
                @include('v2.metronic.tools.datatable-header')
                <div class="card-body pt-0">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 metronic-datatable" data-export-file-name="Brands">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">@lang( 'brand.brands' )</th>
                                <th class="min-w-100px">@lang( 'brand.note' )</th>
                                <th class="min-w-100px">@lang( 'messages.action' )</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @if(isset($brands[0]))
                            @foreach($brands as $brand)
                            <tr>
                                <th>{{$brand->name}}</th>
                                <th>{!!$brand->description!!}</th>
                                <th>
                                    @can("brand.update")
                                        <button data-href="{{action('BrandController@edit', [$brand->id])}}" class="btn btn-sm btn-primary edit_brand_button"><i class="fa fa-edit"></i> @lang("messages.edit")</button>
                                        &nbsp;
                                    @endcan
                                    @can("brand.delete")
                                        <button data-href="{{action('BrandController@destroy', [$brand->id])}}" class="btn btn-sm btn-danger delete_brand_button"><i class="fa fa-trash"></i> @lang("messages.delete")</button>
                                    @endcan
                                </th>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        @endcan
    @endcomponent
    </div>
    

    <div class="modal fade brands_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->

@endsection
