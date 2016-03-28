<hr>
{!! Form::open(['url'=>'project', 'method' => 'POST', 'files' => true, 'id' => 'project-form']) !!}

<div class="row">
    <div class="col-lg-12">
        <h3>Add new project:</h3>
    </div>
</div>

@if(Session::has('success') || Session::has('error'))
    <div class="row">
        <div class="col-lg-12">
            <h4 class="{{ Session::has('error') ? 'error' : 'success' }}">
                {!! Session::has('error') ? Session::get('error') : Session::get('success') !!}
            </h4>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-lg-9">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <p class="errors help-block">{!! $errors->first('name') !!}</p>
            {{ Form::label('name', 'Name', ['class' => 'control-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            <p class="errors help-block">{!! $errors->first('description') !!}</p>
            {{ Form::label('description', 'Description', ['class' => 'control-label']) }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) }}
        </div>
        <div class="form-group{{ $errors->has('technology') ? ' has-error' : '' }}">
            <p class="errors help-block">{!! $errors->first('technology') !!}</p>
            {{ Form::label('technology', 'Technologies', ['class' => 'control-label']) }}
            {{ Form::textarea('technology', null, ['class' => 'form-control', 'rows' => 2]) }}
        </div>
        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
            <p class="errors help-block">{!! $errors->first('role') !!}</p>
            {{ Form::label('role', 'My role in project', ['class' => 'control-label']) }}
            {{ Form::textarea('role', null, ['class' => 'form-control', 'rows' => 3]) }}
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <p class="errors help-block">{!! $errors->first('image') !!}</p>
            {{ Form::label('img', 'Screenshot', ['style' => 'display: block', 'class' => 'control-label']) }}
            <span class="btn btn-default btn-file">
                Browse {!! Form::file('image') !!}
            </span>
        </div>
    </div>
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}