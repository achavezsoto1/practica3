<x-plantillaa>
    <div class="row">
        <div class="col">
            @include("menu")
        </div>
    </div>

    <x-slot:izquierda>
        <h1>mi contenido </h1>
        <h2>izquierda</h2>
    </x-slot:izquierda>
    
    <x-slot:derecha>
        <h1>mi contenido </h1>
        <h2>derecha</h2>
    </x-slot:derecha>
</x-plantillaa>
