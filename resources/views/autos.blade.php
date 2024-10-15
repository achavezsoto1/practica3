@extends("plantilla2")

@section("izquierda")
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Ford</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Chevrolet</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Nissan</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">GMC</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Toyota</a>
</div>
@endsection


@section("derecha")
<h1>
    Aqui estaran los formularios HTML segun correspondan
</h1>
@endsection

@section("piepagina")

<div class=" row">
    <div class="col">
        <div class="bg-primary">
        <p>Mi pie de pagina</p>
        <p>otros linck</p>
    </div>
    </div>
</div>
@endsection