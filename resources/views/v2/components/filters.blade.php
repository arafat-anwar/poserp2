<div class="accordion accordion-toggle-arrow" id="accordionExample1">
  <div class="card">
    <div class="card-header">
      <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">@if(!empty($icon)) {!! $icon !!} @else <i class="fa fa-filter" aria-hidden="true"></i> @endif  {{$title ?? ''}}</div>
    </div>
    @php
    if(isMobile()) {
      $closed = true;
    }
  @endphp
    <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
      <div class="card-body">

            {{$slot}}

      </div>
    </div>
  </div>
</div>