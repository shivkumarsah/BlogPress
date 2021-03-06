@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/setting.social") !!} :: @parent
@endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("admin/setting.social") !!}
        </h3>
    </div>

    <div class="tab-content">
        {!! Form::open(array('url' => url('admin/social'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
        <!-- General tab -->
        <div class="tab-pane active" id="tab-general">
            <div class="form-group  {{ $errors->has('facebook') ? 'has-error' : '' }}">
                {!! Form::label('facebook', trans("admin/setting.facebook"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('facebook', $social['facebook'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('facebook', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('twitter') ? 'has-error' : '' }}">
                {!! Form::label('twitter', trans("admin/setting.twitter"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('twitter', $social['twitter'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('twitter', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('linkedin') ? 'has-error' : '' }}">
                {!! Form::label('linkedin', trans("admin/setting.linkedin"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('linkedin', $social['linkedin'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('linkedin', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('instagram') ? 'has-error' : '' }}">
                {!! Form::label('instagram', trans("admin/setting.instagram"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('instagram', $social['instagram'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('instagram', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('youtube') ? 'has-error' : '' }}">
                {!! Form::label('youtube', trans("admin/setting.youtube"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('youtube', $social['youtube'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('youtube', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('gplus') ? 'has-error' : '' }}">
                {!! Form::label('gplus', trans("admin/setting.gplus"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('gplus', $social['gplus'], array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('gplus', ':message') }}</span>
                </div>
            </div>

        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button type="reset" class="btn btn-sm btn-default">
                    <span class="glyphicon glyphicon-remove-circle"></span> {{
                    trans("admin/modal.reset") }}
                </button>
                <button type="submit" class="btn btn-sm btn-success">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                    Save                    
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
