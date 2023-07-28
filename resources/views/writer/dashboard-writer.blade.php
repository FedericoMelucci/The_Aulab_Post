<x-layout>
    <div class="container-fluid pt-4 text-center text-white mt-5 background-writer shadow-lg ">
        <div class="row justify-content-center">
            <h1 class="display-3 m-5 fw-bold text-capitalize text-white">Bentornato, {{ Auth::user()->name }}</h1>
        </div>
    </div>

    @if (session('message-green'))
        <div class="alert alert-success text-center">
            {{session('message-green')}} 
        </div>
    @endif
    @if (session('message-warning'))
    <div class="alert alert-warning text-center">
        {{session('message-warning')}} 
    </div>
    @endif
    @if (session('message-red'))
    <div class="alert alert-danger text-center">
        {{session('message-red')}} 
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli in attesa di revisione</h2>
                <x-table-articles-writer :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli pubblicati</h2>
                <x-table-articles-writer :articles="$acceptedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-md-start">
            <div class="col-12 col-md-12">
                <h2>Articoli rifiutati</h2>
                <x-table-articles-writer :articles="$rejectedArticles" />
            </div>
        </div>
    </div>
    <div class="margin-revisor"></div>
</x-layout>