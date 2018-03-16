@extends('layouts.app')

@section('content')
<div class="content--boxed">
    <div class="content__header">
        <h2>Nova categoria</h2>
    </div>

    <div class="card">
        {{ Form::open([
            'url' => 'categories', 
            'files' => 'true',
            'class' => 'card__body form-horizontal'
        ]) }}

            <div class="form-group {{ ($errors->has('name') ? 'has-error' : '' ) }}">
                {{ Form::label('name', 'Nome', ['class' => 'col-sm-2 control-label']) }}
                <div class="col-sm-10">
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Foto</label>                
                <div class="col-sm-10">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn--light btn-file">
                            <span class="fileinput-new">Selecione um arquivo</span>
                            <span class="fileinput-exists">Modificar</span>
                            <input type="file" name="image">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="fileinput__close fileinput-exists" data-dismiss="fileinput">
                            <i class="zmdi zmdi-close-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{ Form::submit('Salvar', ['class' => 'btn btn-default']) }}
                </div>
            </div>

        {{ Form::close() }}
    </div>
</div>
@endsection