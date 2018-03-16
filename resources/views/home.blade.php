@extends('layouts.app')

@section('content')

<div class="content--boxed">
    <div class="content__header">
        <h2>Home</h2>
    </div>

    <div class="card">
        <div class="action-header">
            <div class="action-header__label">
                NEW WAY: Desafio Laravel
            </div>
        </div>

        <div class="card__body">
            <p>
                Desenvolva um CRUD de produtos (com pelo menos nome, descrição, foto (se possível inserir mais de uma) e categoria (uma categoria pode ter vários produtos, e um produto pode pertencer a várias categorias, o cadastro da categoria precisa ter uma foto e o nome somente).
            </p>

            <p>
                Criar a listagem de produtos (com busca por nome e por categoria).
            </p>

            <p>
                Criar a listagem de categorias (com busca por nome) e um cadastro.
            </p>

            <p>
                Criar uma API autenticada para listar os produtos cadastrados para consumo em outras aplicações.
            </p>

            <p>
                Não se preocupe com layout (pode usar Bootstrap, Foundation ou outro Framework CSS, na empresa utilizamos o Foundation). Peço que utilize o Framework Laravel porém sem copiar grandes trechos de código da internet.
            </p>

            <p>
                Ao finalizar, nos envie o código e lembre-se de incluir o .sql
                Obrigado!
            </p>
        </div>
    </div>
</div>
@endsection
