<x-layout>
    <div class="container-fluid pt-4 color-dash text-center mt-5 background-dash shadow-dash">
        <div class="row justify-content-center">
            <h1 class="display-3 m-5 fw-bold col-12 text-light text-capitalize">Bentornato, {{ Auth::user()->name }}</h1>
        </div>
    </div>

    {{-- VERDE  --}}
 @if (session('messaggio'))
        <div class="alert alert-success text-center">
            {{session('messaggio')}}
        </div>
    @endif
{{-- ROSSO --}}
@if (session('messagge-red'))
        <div class="alert alert-danger text-center fw-bold">
            {{session('messagge-red')}}
        </div>
    @endif


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Categorie piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie" />
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control me-2 search-adm" placeholder="Inserisci Categoria" id="">
                <button type="submit" class="btn btn-success text-white text-uppercase button-adm">Aggiungi </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tags piattaforma in uso</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di AMMINISTRATORE</h2>
                <x-request-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di REVISORE</h2>
                <x-request-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo di REDATTORE</h2>
                <x-request-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>
</x-layout>