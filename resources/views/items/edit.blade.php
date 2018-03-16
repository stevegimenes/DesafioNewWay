@extends('layouts.app')

@section('content')
<div class="content--boxed">
    <div class="content__header">
        <h2>Produto #{{ $item->id }}</h2>
    </div>

    <div class="card">
        {{ Form::model($item, [
            'route' => ['items.update', $item->id], 
            'method' => 'PUT', 
            'files' => 'true',
            'class' => 'card__body form-horizontal'
        ]) }}

            <div class="form-group {{ ($errors->has('name') ? 'has-error' : '' ) }}">
                {{ Form::label('name', 'Nome', ['class' => 'col-sm-2 control-label']) }}

                <div class="col-sm-10">
                    {{ Form::text('name', $item->name, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group {{ ($errors->has('description') ? 'has-error' : '' ) }}">
                {{ Form::label('description', 'Descrição', ['class' => 'col-sm-2 control-label']) }}
                <div class="col-sm-10">
                    {{ Form::textarea('description', $item->description, ['size' => '30x5', 'class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group {{ ($errors->has('tags') ? 'has-error' : '' ) }}">
                {{ Form::label('tags[]', 'Categorias', ['class' => 'col-sm-2 control-label']) }}

                <div class="col-sm-10">
                    {{ Form::select('tags[]', $categories, $tags, ['class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Selecione uma ou mais categorias']) }}
                </div>
            </div>

             @php
                $image = '';
                if ($item->image) {
                    $images = glob(public_path() . '/storage/item' . $item->id . '.*');
                    $image = Storage::url(basename($images[0]));
                }
            @endphp

            @if (strlen($image) > 0)
                <div class="form-group {{ ($errors->has('name') ? 'has-error' : '' ) }}">
                    <label class="col-sm-2 control-label">Foto atual</label>

                    <div class="col-sm-10">
                        <img src="{{ $image }}" style="max-width:250px; max-height:250px;" >

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="deleteImage">
                                <i class="input-helper"></i>
                                    Excluir imagem
                            </label>
                        </div>
                    </div>
                </div>
            @endif

            <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Nova foto</label>                
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