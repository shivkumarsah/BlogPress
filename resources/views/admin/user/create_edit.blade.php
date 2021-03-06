@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
        <!-- Tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("admin/modal.general") }}</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($user))
{!! Form::model($user, array('url' => url('admin/user') . '/' . $user->id, 'method' => 'put', 'class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => url('admin/user'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}
@endif
        <!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', trans("admin/users.name"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('name', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('username') ? 'has-error' : '' }}">
            {!! Form::label('username', trans("admin/users.username"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('username', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('username', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('email', trans("admin/users.email"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::label('password', trans("admin/users.password"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::password('password', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            {!! Form::label('password_confirmation', trans("admin/users.password_confirmation"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
            </div>
        </div>

        <div class="form-group  {{ $errors->has('roles') ? 'has-error' : '' }}">
            {!! Form::label('roles', trans("admin/users.roles"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('roles', ['1' => 'Admin', '2' => 'SEO', '3' => 'Editor and SEO', '4' => 'Writer'], null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
            </div>
        </div>


        <div class="form-group  {{ $errors->has('confirmed') ? 'has-error' : '' }}">
            {!! Form::label('confirmed', trans("admin/users.active_user"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::label('confirmed', trans("admin/users.yes"), array('class' => 'control-label')) !!}
                {!! Form::radio('confirmed', '1', @isset($user)? $user->confirmed : 'false') !!}
                {!! Form::label('confirmed', trans("admin/users.no"), array('class' => 'control-label')) !!}
                {!! Form::radio('confirmed', '0', @isset($user)? $user->confirmed : 'true') !!}
                <span class="help-block">{{ $errors->first('confirmed', ':message') }}</span>
            </div>
        </div>


        <div class="form-group  {{ $errors->has('photo') ? 'has-error' : '' }}">
            {!! Form::label('photo', trans("admin/users.photo"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::file('photo', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('photo', ':message') }}</span>
            </div>
        </div>

        <div class="form-group  {{ $errors->has('facebook_id') ? 'has-error' : '' }}">
            {!! Form::label('facebook_id', trans("admin/users.facebook_id"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('facebook_id', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('facebook_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('twitter_id') ? 'has-error' : '' }}">
            {!! Form::label('twitter_id', trans("admin/users.twitter_id"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('twitter_id', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('twitter_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('linkedin_id') ? 'has-error' : '' }}">
            {!! Form::label('linkedin_id', trans("admin/users.linkedin_id"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('linkedin_id', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('linkedin_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('others') ? 'has-error' : '' }}">
            {!! Form::label('others', trans("admin/users.others"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('others', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('others', ':message') }}</span>
            </div>
        </div>







    </div>
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
                @if	(isset($user))
                    {{ trans("admin/modal.edit") }}
                @else
                    {{trans("admin/modal.create") }}
                @endif
            </button>
        </div>
    </div>
    {!! Form::close() !!}
    @endsection @section('scripts')
        <script type="text/javascript">
            $(function () {
                $("#roles").select2()
            });
        </script>
</div>
@endsection
