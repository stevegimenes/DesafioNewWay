@extends('layouts.app')

@section('content')
<div class="content--boxed">
    <div class="content__header">
        <h2>API</h2>
    </div>

    <div class="card">
        <div class="card__header">
            <div class="media">
                <div class="media-body">
                    <h2>
                        Request
                        <small>Headers</small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="card__body">
            <p>
                GET /api/stores/126/questions?page=1&amp;pending=true HTTP/1.1</br>
                Host: staging.trustvox.com.br</br>
                Content-Type: application/json</br>
                Accept: application/vnd.trustvox-v2+json</br>
                Authorization: Bearer </br>7fd9bf3008d40a1c0afce1698fe79980691dd7120c72ab2cf11e9a2282b50d32</br>
                Cache-Control: no-cache</br>
                Postman-Token: b4bcd1a0-07be-cfad-0afb-cd147519787a
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card__header">
            <div class="media">
                <div class="media-body">
                    <h2>
                        Response
                        <small>json</small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="card__body">
            <p>
                {"items":[{"id":288,"text":"Pergunta rtesre !!?","created_at":"2015-10-16T17:31:22.000-03:00","updated_at":"2015-10-16T17:31:22.000-03:00","visible":true,"state":"pending","consumer":{"email":"epereira@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/288"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":306,"text":"Lorem ipsum 11-31-01-12","created_at":"2015-12-01T11:31:44.000-02:00","updated_at":"2015-12-01T11:31:44.000-02:00","visible":true,"state":"pending","consumer":{"email":"testehomolog@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/306"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":307,"text":"Nova pergunta teste","created_at":"2015-12-01T12:13:25.000-02:00","updated_at":"2015-12-01T12:13:25.000-02:00","visible":true,"state":"pending","consumer":{"email":"testehomolog@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/307"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":308,"text":"Teste tarde","created_at":"2015-12-01T13:56:55.000-02:00","updated_at":"2015-12-01T13:56:55.000-02:00","visible":true,"state":"pending","consumer":{"email":"testehomolog@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/308"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":311,"text":"hfdksalfhd sdljkafh al","created_at":"2015-12-01T14:14:16.000-02:00","updated_at":"2015-12-01T14:14:16.000-02:00","visible":true,"state":"pending","consumer":{"email":"testehomolog@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/311"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":336,"text":"Teste com ricardinho","created_at":"2016-04-20T10:43:13.000-03:00","updated_at":"2016-04-20T10:43:13.000-03:00","visible":true,"state":"pending","consumer":{"email":"scruz@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/336"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":360,"text":"Teste do ricardinho em 20/07","created_at":"2016-07-20T08:55:10.000-03:00","updated_at":"2016-07-20T08:55:10.000-03:00","visible":true,"state":"pending","consumer":{"email":"rsoares@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/360"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":361,"text":"Outro teste do ricardinho em 20/07","created_at":"2016-07-20T09:06:16.000-03:00","updated_at":"2016-07-20T09:06:16.000-03:00","visible":true,"state":"pending","consumer":{"email":"rsoares@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/361"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":365,"text":"Nova questão Trustvox","created_at":"2016-07-20T11:25:00.000-03:00","updated_at":"2016-07-20T11:25:00.000-03:00","visible":true,"state":"pending","consumer":{"email":"rsoares@neoassist.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/365"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":366,"text":"Talita tem duvidas!","created_at":"2016-07-22T10:28:55.000-03:00","updated_at":"2016-07-22T10:28:55.000-03:00","visible":true,"state":"pending","consumer":{"email":"tcamilo@neoassit.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/366"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":367,"text":"Talita ainda tem duvidas...","created_at":"2016-07-22T10:29:12.000-03:00","updated_at":"2016-07-22T10:29:12.000-03:00","visible":true,"state":"pending","consumer":{"email":"tcamilo@neoassit.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/367"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":61859,"text":"Pergunta de homolog 10:20","created_at":"2017-02-17T10:19:54.000-02:00","updated_at":"2017-02-17T10:19:54.000-02:00","visible":true,"state":"pending","consumer":{"email":"stevegc@gmail.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/61859"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":61874,"text":"Nova pergunta de homologa 11:50","created_at":"2017-02-17T11:50:37.000-02:00","updated_at":"2017-02-17T11:50:37.000-02:00","visible":true,"state":"pending","consumer":{"email":"stevegc@gmail.com"},"answer":{"id":28028,"text":"Bom dia. Ele até pode ser utilizado em outros tipos de som, sem que seja automotivo, porém sua alimentação é 12V. Caso fique interessado, poderá comprar pelo site ou televendas: (47) 3332-9258.","created_at":"2015-04-07T10:26:06.000-03:00","links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/answers/28028"},{"rel":"question","href":"http://staging.trustvox.com.br/api/questions/61874"}]},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/61874"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":61883,"text":"Teste de pergunta 14:40","created_at":"2017-02-17T14:40:03.000-02:00","updated_at":"2017-02-17T14:40:03.000-02:00","visible":true,"state":"pending","consumer":{"email":"stevegc@gmail.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/61883"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]},{"id":61886,"text":"Ainda estou testando :) 14:44","created_at":"2017-02-17T14:44:10.000-02:00","updated_at":"2017-02-17T14:44:10.000-02:00","visible":true,"state":"pending","consumer":{"email":"stevegc@gmail.com"},"product":{"id":32126,"name":"99 Product Name","code":"99876","links":[{"rel":"product_permalink","href":"http://trustvox.homologa.neoassist.com/"},{"rel":"image","href":"//s3.trustvox.com.br/trustvox-core-staging-uploads/uploads/product/photo/32126/square_ror_tote.jpeg"}]},"links":[{"rel":"self","href":"http://staging.trustvox.com.br/api/questions/61886"},{"rel":"store","href":"http://staging.trustvox.com.br/api/stores/126"}]}],"links":[{"rel":"next","href":"http://staging.trustvox.com.br/api/stores/126/questions?page=2&pending=true"},{"rel":"self","href":"http://staging.trustvox.com.br/api/stores/126/questions?page=1&pending=true"}]}
            </p>
        </div>
    </div>
    </div>
</div>
@endsection