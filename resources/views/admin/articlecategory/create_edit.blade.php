@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
<div class="page-header">
	<h3>
		{!! trans("admin/articlecategory.articlecategories") !!}
	</h3>
</div>
@if (isset($articlecategory))
{!! Form::model($articlecategory, array('url' => url('admin/articlecategory') . '/' . $articlecategory->id, 'method' => 'put', 'class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => url('admin/articlecategory'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
@endif
	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<div class="form-group  {{ $errors->has('parent') ? 'has-error' : '' }}">
					{!! Form::label('parent', trans("admin/articlecategory.parent_name"), array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::select('parent', $categories, @isset($articlecategory)? $articlecategory->parent : 'default', array('class' => 'form-control', 'placeholder' => 'Select parent category...')) !!}
						<span class="help-block">{{ $errors->first('parent', ':message') }}</span>
					</div>
				</div>

				<div class="form-group  {{ $errors->has('_id') ? 'has-error' : '' }}">
					{!! Form::label('title', trans("admin/articlecategory.name"), array('class' => 'control-label')) !!}
					<div class="controls">
						{!! Form::text('_id', null, array('class' => 'form-control')) !!}
						<span class="help-block">{{ $errors->first('_id', ':message') }}</span>
					</div>
				</div>
			</div>
			<!-- ./ general tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->

		<div class="form-group">
			<div class="col-md-12">
				<button type="reset" class="btn btn-sm btn-warning close_popup">
					<span class="glyphicon glyphicon-ban-circle"></span> {{
					trans("admin/modal.cancel") }}
				</button>
				<button type="reset" class="btn btn-sm btn-default">
					<span class="glyphicon glyphicon-remove-circle"></span> {{
					trans("admin/modal.reset") }}
				</button>
				<button type="submit" class="btn btn-sm btn-success">
					<span class="glyphicon glyphicon-ok-circle"></span> 
					@if (isset($newscategory)) 
						{{ trans("admin/modal.edit") }}
					@else 
						{{trans("admin/modal.create") }}
				    	@endif
				</button>
			</div>
		</div>
		<!-- ./ form actions -->

{!! Form::close() !!}
@endsection
