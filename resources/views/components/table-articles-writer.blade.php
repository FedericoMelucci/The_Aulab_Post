<table class="table-hover table border table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
         <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{Str::limit($article->title, 8)}}</td>
            <td>{{Str::limit($article->subtitle, 8)}}</td>
            <td>{{$article->category->name ?? ' '}}</td>
            <td>
                @foreach ($article->tags as $tag)
                    {{Str::limit($tag->name, 5)}},
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white"><i class="fa-brands fa-readme"></i></a>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                <form action="{{route('article.destroy', compact('article'))}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-ban"></i></button>
                </form>
            </td>
         </tr>   
        @endforeach
    </tbody>
</table>