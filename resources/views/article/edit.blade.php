<x-layout>
<div class="container">
    <div class="margin-custom">
        <h1 class="d-flex justify-content-center">MODIFICA IL TUO ARTICOLO</h1>
    </div>
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-12 col-md-6">
            @if ($errors->any())
            <div class="alert alert-danger mt-5 ">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <div class="registration-form">
                <form  action="{{ route('article.update', $article)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input class="form-control item border"  type="text" value="{{$article->title}}" name="title" id="username" placeholder="Titolo" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control item border" type="text" name="subtitle" value="{{$article->subtitle}}" id="password" placeholder="Sottotitolo" required>
                    </div>
                    <div class="">
                        <p class="">Inserisci immagine:</p>
                        <input type="file"  name="image" class="form-control border">
                    </div>
                    <div class="form-group mb-3">
                        <p>Tags</p>
                        <input name="tags" id="tags" class="form-control border" value="{{$article->tags->implode('name', ', ')}}">
                        <span class="fst-italic mb-1">Dividi ogni tag con una virgola</span>
                    </div>
                    <div class="mb-3 form-group">
                       <p>Scegli la nuova Categoria:</p>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <textarea placeholder="Inserisci il nuovo corpo del testo..." name="body" cols="30" rows="7" class="form-control border">{{$article->body}}</textarea>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <a href="{{route('homepage')}}"><button type="submit" class="main-btn text-white text-uppercase">Modifica articolo</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>