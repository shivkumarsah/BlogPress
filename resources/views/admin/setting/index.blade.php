@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/setting.setting") !!} :: @parent
@endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("admin/setting.setting") !!}
        </h3>
    </div>

    <div class="tab-content">
        <!-- General tab -->
        <div class="tab-pane active" id="tab-general">
            <div class="form-group  {{ $errors->has('copyscrap_api') ? 'has-error' : '' }}">
                {!! Form::label('copyscrap_api', trans("admin/setting.copyscrap_api"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('copyscrap_api', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('copyscrap_api', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('copyscrap_check') ? 'has-error' : '' }}">
                {!! Form::label('copyscrap_check', trans("admin/setting.copyscrap_check"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('copyscrap_check', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('copyscrap_check', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('content_req_length') ? 'has-error' : '' }}">
                {!! Form::label('content_req_length', trans("admin/setting.content_req_length_percentage"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('content_req_length', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('content_req_length', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('google_analytics') ? 'has-error' : '' }}">
                {!! Form::label('google_analytics', trans("admin/setting.google_analytics"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('google_analytics', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('google_analytics', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('google_webmasters') ? 'has-error' : '' }}">
                {!! Form::label('google_webmasters', trans("admin/setting.google_webmasters"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('google_webmasters', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('google_webmasters', ':message') }}</span>
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
