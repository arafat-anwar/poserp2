<div class="box {{$class ?? 'box-solid'}}" @if(!empty($id)) id="{{$id}}" @endif>
    @if(empty($header))
        @if(!empty($title) || !empty($tool))
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    {!!$icon ?? '' !!}
                    <div class="card-title">
                        <h2>{{ $title ?? '' }}</h2>
                    </div>
                    {!!$tool ?? ''!!}
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
            </div>
        @endif
    @else
        <div class="box-header">
            {!! $header !!}
        </div>
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>{!! $header !!}</h2>
            </div>
            <!--end::Card title-->
        </div>
    @endif

    <div class="card-body">
        {{$slot}}
    </div>
    <!-- /.box-body -->
</div>