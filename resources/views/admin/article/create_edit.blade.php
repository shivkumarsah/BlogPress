@extends('admin.layouts.form')
{{-- Content --}}
@section('content')
<div class="page-header">
    <h3>
        @if (isset($article)) 
            Edit
        @else 
            Add
        @endif
        {!! trans("admin/article.article") !!}
    </h3>
</div>


@if (isset($article))
{!! Form::model($article, array('url' => url('admin/article') . '/' . $article->id, 'method' => 'put','id'=>'fupload', 'class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => url('admin/article'), 'method' => 'post', 'class' => 'bf','id'=>'fupload', 'files'=> true)) !!}
@endif

    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('categories') ? 'has-error' : '' }}">
            {!! Form::label('categories', trans("admin/article.category"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('categories[]', $categories, @isset($article)? $article->categories : 'default', array('class' => 'form-control', 'multiple'=>true, 'size'=>6)) !!}
                <span class="help-block">{{ $errors->first('categories', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title', trans("admin/modal.title"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('title', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('slug') ? 'has-error' : '' }}">
            {!! Form::label('slug', trans("admin/article.slug"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('slug', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('slug', ':message') }}</span>
            </div>
        </div>
        <div class="form-group {!! $errors->has('picture') ? 'error' : '' !!} ">
            {!! Form::label('source', trans("admin/article.picture"), array('class' => 'control-label')) !!}
            <div class="controls">
               <input name="picture" type="file" class="uploader" id="image" value="Upload"/>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('picture_source') ? 'has-error' : '' }}">
            {!! Form::label('picture_source', trans("admin/article.picture_source"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('picture_source', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('picture_source', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('introduction') ? 'has-error' : '' }}">
            {!! Form::label('introduction', trans("admin/article.introduction"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::textarea('introduction', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('introduction', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('content') ? 'has-error' : '' }}">
            {!! Form::label('content', trans("admin/article.content"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('tags') ? 'has-error' : '' }}">
            {!! Form::label('tags', trans("admin/article.tags"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('tags', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('tags', ':message') }}</span>
            </div>
        </div>
        
        <div class="form-group  {{ $errors->has('summary') ? 'has-error' : '' }}">
            <div class="controls">
                {!! Form::label('summary', trans("admin/article.summary"), array('class' => 'control-label')) !!}
                {!! Form::checkbox('summary', 1) !!}&nbsp;&nbsp;&nbsp;
                <span class="help-block">{{ $errors->first('summary', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('type') ? 'has-error' : '' }}">
            <div class="controls">
                {!! Form::label('type', trans("admin/article.type"), array('class' => 'control-label')) !!}
                {!! Form::checkbox('type', 1) !!}&nbsp;&nbsp;&nbsp;
                <span class="help-block">{{ $errors->first('type', ':message') }}</span>
            </div>
            
        </div>

        <!-- ./ general tab -->


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
                    @if (isset($news))
                        {{ trans("admin/modal.edit") }}
                    @else
                        {{trans("admin/modal.create") }}
                    @endif
                </button>
            </div>
        </div>
        <!-- ./ form actions -->
    </div>

    

</form>
@endsection
