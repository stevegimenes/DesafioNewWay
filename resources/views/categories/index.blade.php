@extends('layouts.app')

@section('content')

<div class="content--boxed">
    <div class="content__header">
        <h2>Categorias</h2>
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
                <form method="get" action="/categories" id="formFilterCategories">
                    <input type="text" name='q' value='{{ $queryFilterCategories }}' placeholder="Entre com o nome..." class="action-header__input" id="queryFilterCategories">

                    <i data-toggle="tooltip" data-placement="top" title="" data-original-title="Limpar" class="action-header__close zmdi zmdi-long-arrow-left" id="resetFilterCategories"></i>
                </form>
            </div>

            <div class="actions action-header__actions">
                <a href="" class="action-header__toggle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pesquisar">
                    <i class="zmdi zmdi-search" id='buttonFilterCategories'></i>
                </a>

                <a href="/categories" data-toggle="tooltip" data-placement="top" title="" data-original-title="Recarregar"><i class="zmdi zmdi-time"></i></a>

                <a href="/categories/create" data-toggle="tooltip" data-placement="top" title="" data-original-title="Adicionar"><i class="zmdi zmdi-plus-circle"></i></a>
            </div>
        </div>

        <div class="list-group list-group--striped">

            @foreach ($categories as $category)

                @php
                    $image = '';
                    if (strlen($category->image) > 0) {
                        $image = Storage::url($category->image);
                    }
                @endphp

                <div class="list-group-item media">
                    <div class="pull-left">
                        <a href="/categories/{{ $category->id }}/edit">
                            <div class="avatar-char" style="background-image: url('{{ $image }}'); background-repeat: no-repeat;    background-size: auto 38px; background-position: center center;">
                                @if (strlen($image) <= 0) 
                                    {{ CustomTemplatefunc::getFirstLetter($category->name) }}
                                @endif
                            </div>
                        </a>
                    </div>

                    <div class="pull-right">
                        <div class="actions">
                            <div class="dropdown">
                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/categories/{{ $category->id }}/edit">Editar</a></li>

                                    <li><a href="javascript: app.categoryDelete({{ $category->id }})">Apagar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="media-body" style="padding:11px 0 0 0 !important;">
                        <span>{{ $category->name }}</span>
                    </div>
                </div>

            @endforeach

        </div>

        <div class="text-center p-30">
            <ul class="pagination">
                <li><a href="{{ $pagination['previousPageUrl'] }}"><i class="zmdi zmdi-long-arrow-left"></i></a></li>

                @for ($i = 1; $i <= $pagination['lastPage']; $i++)
                    <li class="{{ $i == $pagination['currentPage'] ? 'active' : '' }}"><a href="?page={{ $i }}&q={{ $queryFilterCategories }}">{{ $i }}</a></li>
                @endfor

                <li><a href="{{ $pagination['nextPageUrl'] }}"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

{{ Form::open(['url' => 'categories', 'id' => 'formCategoryDelete']) }}
    {{ Form::hidden('_method', 'DELETE') }}
{{ Form::close() }}

@endsection