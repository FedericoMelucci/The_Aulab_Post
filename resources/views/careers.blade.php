<x-layout>
    <style>
        body{
            background-color: #f9efd7;
            background: rgb(255,255,255);
            background: linear-gradient(174deg, rgba(255,255,255,1) 29%, rgba(249,239,215,1) 66%);
        }
    </style>
    <div class="margin-custom" ></div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 d-flex text-center flex-column">
                <h1 class="mb-5">Lavora con noi</h1>
                <h3>Lavora come amministratore</h3>
                <p class="mb-3">Che cosa farai? Avrai accesso senza limiti a tutte le funzionalità del sito</p>
                <h3>Lavora come revisore</h3>
                <p class="mb-3">Che cosa farai? Dovrai controllare che gli articoli rispettino le norme e non siano fake news</p>
                <h3>Lavora come scrittore</h3>
                <p class="mb-3">Che cosa farai? Offrirai le tue capacità di scrittura al nostro portale</p>
            </div>
        </div>
    </div>
        <div class="col-12 col-md-12">
            @if($errors->any())
            <div class="alert-danger alert d-flex justify-content-center">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="background">
            <div class="container container-mail">
                <div class="screen">
                    <div class="screen-header">
                        <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                        </div>
                        <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                        </div>
                    </div>
                    <div id="container" class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>CONTATTACI</span>
                            </div>
                            <img src="/img/we-are-hiring-2161926-1816232-removebg-preview.png" class="img-fluid" width="100%" id="margin-mail" alt="">
                        </div>
                        <div class="screen-body-item">
                            <form action="{{route('careers.submit')}}" method="post" enctype= "multipart/form-data">
                                @csrf
                                <div class="app-form">
                                    <div class="app-form-group">
                                        <select name="role" id="role" class=" app-form-control">
                                            <option value="" class="text-dark">Seleziona il ruolo</option>
                                            <option value="admin" class="text-dark">Amministratore</option>
                                            <option value="revisor" class="text-dark">Revisore</option>
                                            <option value="writer" class="text-dark">Redattore</option>
                                        </select>
                                    </div>
                                    <div class="app-form-group mt-5">
                                        <input class="app-form-control input-mail" type="email" id="email" name="email" placeholder="EMAIL" value="{{old('email') ?? Auth::user()->email}}">
                                    </div>
                                    <div class="app-form-group message">
                                        <textarea name="message" id="message" cols="30" rows="7" placeholder="Messaggio" class="app-form-control">{{old('message')}}</textarea>
                                    </div>
                                    <div class="app-form-group buttons">
                                        <button class="app-form-button button-mail fs-5" type="submit">INVIA  <i class="fa-solid fa-envelope"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>