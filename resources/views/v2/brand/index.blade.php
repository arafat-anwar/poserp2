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
                    <table class="table metronic-datatable" data-export-file-name="Brands">
                        <thead>
                            <tr>
                                <th>@lang( 'brand.brands' )</th>
                                <th>@lang( 'brand.note' )</th>
                                <th>@lang( 'messages.action' )</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($rows[0]))
                            @foreach($rows as $key => $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{!! glyphiconToFa($row->action) !!}</td>
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
