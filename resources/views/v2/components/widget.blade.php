<div class="card {{$class ?? 'box-solid'}}" @if(!empty($id)) id="{{$id}}" @endif>
    @if(empty($header))
        @if(!empty($title) || !empty($tool))
            {{--        <div class="box-header">--}}
            {{--            {!!$icon ?? '' !!}--}}
            {{--            <h3 class="box-title">{{ $title ?? '' }}</h3>--}}
            {{--            {!!$tool ?? ''!!}--}}
            {{--        </div>--}}
            <div class="card-header">
                <div class="card-title">
                    {!!$icon ?? '' !!}
                    <h2>{{ $title ?? '' }}</h2>
                    {!!$tool ?? ''!!}
                </div>
            </div>
        @endif
    @else
        <div class="card-header">
            <div class="card-title">
                <h2>{!! $header !!}</h2>
            </div>
        </div>
        {{--        <div class="box-header">--}}
        {{--            {!! $header !!}--}}
        {{--        </div>--}}
    @endif

    <div class="card-body pt-0">
        {{$slot}}
    </div>

    <!-- /.box-body -->
</div>