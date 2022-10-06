<div class="modal-dialog modal-dialog-centered mw-800px" role="document">
  <div class="modal-content">
    {!! Form::open(['url' => action('\Modules\Essentials\Http\Controllers\ToDoController@store'), 'id' => 'task_form', 'method' => 'post']) !!}

    <div class="modal-header">
{{--      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
      <h4 class="modal-title">@lang( 'essentials::lang.add_to_do' )</h4>
		<span class="svg-icon svg-icon-1">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
				<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
			</svg>
		</span>
    </div>

    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
    	<div class="row g-9 mb-1 mt-1">
    		<div class="col-lg-12">
		        <div class="form-group">
		            {!! Form::label('task', __('essentials::lang.task') , 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"')!!}
		            {!! Form::text('task', null, ['class' => 'form-control', 'required']) !!}
		         </div>
		    </div>
		    @can('essentials.assign_todos')
			<div class="col-lg-6">
				<div class="form-group">
					{!! Form::label('users', __('essentials::lang.assigned_to'), 'class="required d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					<div class="input-group mb-5">
							<span class="input-group-text" id="basic-addon2">
								<i class="fas fa-user fs-4"></i>
							</span>
						{!! Form::select('users[]', $users, null, ['class' => 'form-control select2', 'multiple', 'required', 'style' => 'width: 80%;']); !!}
					</div>
				</div>
			</div>
			@endcan

			<div class="col-md-6">
		        <div class="form-group">
					{!! Form::label('priority', __('essentials::lang.priority') . ':' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					{!! Form::select('priority', $priorities, null, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select'), 'style' => 'width: 100%;']); !!}
				</div>
			</div>
			<div class="col-md-6">
		        <div class="form-group">
					{!! Form::label('status', __('sale.status') . ':' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					{!! Form::select('status', $task_statuses, null, ['class' => 'form-control select2', 'placeholder' => __('messages.please_select'), 'style' => 'width: 100%;']); !!}
				</div>
			</div>

		    <div class="col-md-6">
		        <div class="form-group">
					{!! Form::label('date', __('business.start_date') . ':*' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					<div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-calendar fs-4"></i>
                        </span>
						{!! Form::text('date', @format_date('now'), ['class' => 'form-control datepicker text-center', 'required', 'readonly']); !!}
					</div>
				</div>
			</div>
			<div class="col-md-6">
		        <div class="form-group">
					{!! Form::label('end_date', __('essentials::lang.end_date') . ':' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					<div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-calendar fs-4"></i>
                        </span>
						{!! Form::text('end_date', '', ['class' => 'form-control datepicker text-center', 'readonly']); !!}
					</div>
				</div>
			</div>

			<div class="col-md-6">
		        <div class="form-group">
					{!! Form::label('estimated_hours', __('essentials::lang.estimated_hours') . ':' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					<div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="fas fa-clock fs-4"></i>
                        </span>
						{!! Form::text('estimated_hours', null, ['class' => 'form-control']); !!}
					</div>
				</div>
			</div>

	    	<div class="col-md-12">
	    		<div class="form-group">
					{!! Form::label('to_do_description', __('lang_v1.description') . ':' , 'class=" d-flex align-items-center fs-6 fw-semibold mb-2 mt-2"') !!}
					{!! Form::textarea('description', null, ['class' => 'form-control form-control-solid','id' => 'to_do_description', 'rows' => 3]); !!}
				</div>
	    	</div>
    	</div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right">
      	<span class="ladda-label">@lang( 'messages.save' )</span>
      </button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->