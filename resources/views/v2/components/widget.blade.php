<div class="card card-custom {{$class ?? 'bg-solid'}}" @if(!empty($id)) id="{{$id}}" @endif>
    @if(empty($header))
        @if(!empty($title) || !empty($tool))
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label">{{ $title ?? '' }} <span class="d-block text-muted pt-2 font-size-sm">{{ $subtitle ?? '' }}</span></h3>
                </div>
                {!!$tool ?? ''!!}
            </div>
        @endif
    @else
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">{!! $header !!} <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
            </div>
        </div>
      
    @endif

    <div class="card-body pt-0">
        {{$slot}}
    </div>

    <!-- /.box-body -->
</div>