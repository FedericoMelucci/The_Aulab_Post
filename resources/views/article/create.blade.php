<x-layout>
    <style>
        body{
            margin-top: 150px;
            background-color: #38445a;
        }
        .header_navbar{
            background-color: #white;
        }
        
    </style>
    <div class="container">
        <h1 class="text-center text-white">CREA IL TUO ARTICOLO</h1>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-12 col-md-6">
                <div class="registration-form">
                    <form  action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control item border @error('title') is-invalid @enderror"  type="text" value="{{ old('title') }}" name="title" id="username" placeholder="Titolo">
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <input class="form-control item border @error('subtitle') is-invalid @enderror" type="text" name="subtitle" value="{{ old('subtitle') }}" id="password" placeholder="Sottotitolo">
                            @error('subtitle')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <p class="">Inserisci immagine:</p>
                            <input type="file"  name="image" class="form-control border  @error('image') is-invalid @enderror">
                        </div>
                        <div class="form-group mb-3">
                            <p>Tags</p>
                            <input name="tags" id="tags" class="form-control border  @error('tags') is-invalid @enderror" value="{{old('tags')}}">
                            <span class="fst-italic">Dividi ogni tag con una virgola</span>
                        </div>
                        <div class="form-group mb-3">
                            <p>Scegli la categoria:</p>
                            <select name="category" class="form-select border ">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <textarea placeholder="Inserisci il corpo del testo..." name="body" cols="30" rows="7" class="form-control border  @error('body') is-invalid @enderror">{{old('body')}}</textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="main-btn text-white text-uppercase">Inserisci articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
    </div>
      {{-- {{ route('article.store') }} --}}
</x-layout>