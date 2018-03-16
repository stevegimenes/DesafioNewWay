@extends('layouts.app')

@section('content')

<div class="content--boxed">
    <form method="get" action="/items" id="formFilterItems">
        <div class="content__header">
            <h2>Produtos</h2>

            {{ Form::select('c[]', $categories, null, ['id' => 'categoriesFilterItems', 'class' => 'select2', 'multiple' => 'multiple', 'data-placeholder' => 'Pesquisar produtos por categoria']) }}
        </div>

        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>

                {!! Session::get('success') !!}
            </div>
        @endif

        <div class="card">
            <div class="action-header">
                <div class="action-header__label">
                    @if ($total > 0) 
                        {{ $total }} registro(s) encontrado(s)

                    @else
                        Nenhum registro encontrado
                    @endif
                </div>

                <div class="action-header__search">                
                    <input type="text" name='q' value='{{ $queryFilterItems }}' placeholder="Entre com o nome..." class="action-header__input" id="queryFilterItems">

                    <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Limpar" class="action-header__close zmdi zmdi-long-arrow-left" id="resetFilterItems"></i>
                </div>

                <div class="actions action-header__actions">
                    <a href="" class="action-header__toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pesquisar">
                        <i class="zmdi zmdi-search" id='buttonFilterItems'></i>
                    </a>

                    <a href="/items" data-toggle="tooltip" data-placement="top" title="" data-original-title="Recarregar"><i class="zmdi zmdi-time"></i></a>

                    <a href="/items/create" data-toggle="tooltip" data-placement="top" title="" data-original-title="Adicionar"><i class="zmdi zmdi-plus-circle"></i></a>
                </div>
            </div>

            <div class="list-group list-group--striped">

                @foreach ($items as $item)

                    @php
                        $image = '';
                        if ($item->image) {
                            $images = glob(public_path() . '/storage/item' . $item->id . '.*');
                            $image = Storage::url(basename($images[0]));
                        }
                    @endphp

                    <div class="list-group-item media">
                        <div class="pull-left">
                            <a href="/items/{{ $item->id }}/edit">
                                <div class="avatar-char" style="background-image: url('{{ $image }}'); background-repeat: no-repeat;    background-size: auto 38px; background-position: center center;">
                                    @if (!$image) 
                                        {{ CustomTemplatefunc::getFirstLetter($item->name) }}
                                    @endif
                                </div>
                            </a>
                        </div>

                        <div class="pull-right">
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="/items/{{ $item->id }}/edit">Editar</a></li>

                                        <li><a href="javascript: app.itemDelete({{ $item->id }})">Apagar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="media-body" style="padding:11px 0 0 0 !important;">
                            <div class="list-group__heading">{{ $item->name }}</div>
                            <small class="list-group__text">{{ $item->description }}</small>

                            <span class="list-group__attrs">
                                @foreach ($item->tags as $tag)
                                    <span>{{ $tag->name }}</span>
                                @endforeach
                            </span>
                        </div>
                    </div>

                @endforeach            
                
            </div>

            <div class="text-center p-30">
                <ul class="pagination">
                    <li><a href="{{ $pagination['previousPageUrl'] }}"><i class="zmdi zmdi-long-arrow-left"></i></a></li>

                    @for ($i = 1; $i <= $pagination['lastPage']; $i++)
                        <li class="{{ $i == $pagination['currentPage'] ? 'active' : '' }}"><a href="?page={{ $i }}&q={{ $queryFilterItems }}">{{ $i }}</a></li>
                    @endfor

                    <li><a href="{{ $pagination['nextPageUrl'] }}"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </form>
</div>

{{ Form::open(['url' => 'items', 'id' => 'formItemDelete']) }}
    {{ Form::hidden('_method', 'DELETE') }}
{{ Form::close() }}

@endsection