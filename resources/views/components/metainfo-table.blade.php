<table class="table table-striped table-hover border table-responsive">
    <thead class="table-dark">
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Nr. Articoli</th>
            <th scope='col'>Aggiorna</th>
            <th scope='col'>Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope='row'>{{$metaInfo->id}}</th>
            <td>{{($metaInfo->name)}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if($metaType == "tags")
            <td>
                <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-white">Elimina</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuova categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white fw-bold text-uppercase">Aggiorna <i class="fa-solid fa-arrows-rotate fa-spin" style="color: #ffffff;"></i></button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-white fw-bold text-uppercase">Elimina <i class="fa-solid fa-trash-can-arrow-up"></i></button>
                </form>
            </td>
            @endif
    </tr>
        @endforeach
    </tbody>
</table>
