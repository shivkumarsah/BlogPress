@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/setting.ads") !!} :: @parent
@endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("admin/setting.ads") !!}
        </h3>
    </div>

    <div class="tab-content">
        <!-- General tab -->
        <div class="tab-pane active" id="tab-general">
            <div class="form-group  {{ $errors->has('home') ? 'has-error' : '' }}">
                {!! Form::label('home', trans("admin/setting.home"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::textarea('home', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('home', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('category') ? 'has-error' : '' }}">
                {!! Form::label('category', trans("admin/setting.category"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('category', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('category', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('article') ? 'has-error' : '' }}">
                {!! Form::label('article', trans("admin/setting.article"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::textarea('article', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('article', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('common_header') ? 'has-error' : '' }}">
                {!! Form::label('common_header', trans("admin/setting.common_header"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::textarea('common_header', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('common_header', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('common_footer') ? 'has-error' : '' }}">
                {!! Form::label('common_footer', trans("admin/setting.common_footer"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::textarea('common_footer', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('common_footer', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('common_sidebar') ? 'has-error' : '' }}">
                {!! Form::label('common_sidebar', trans("admin/setting.common_sidebar"), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::textarea('common_sidebar', null, array('class' => 'form-control','rows'=>'2')) !!}
                    <span class="help-block">{{ $errors->first('common_sidebar', ':message') }}</span>
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
