
<div class="wrapper">
  <div class="card">
    <div class="card-banner">
      @if($article->category)
      <p class="category-tag popular"><a class="text-light fw-bold" href="{{route('filter.category', ['category' =>$article->category->id])}}">{{$article->category->name}}</a></p>
      @else
      <p class="category-tag popular">Senza categoria</p>
      @endif
      <img class="banner-img" src='{{Storage::url($article->image)}}' alt=''>    
    </div>
    <div class="card-body">
      <a href="{{route('article.show', compact('article'))}}"><h3 class="blog-title trunc-title">{{$article->title}}</h3></a>
      <a href="{{route('article.show', compact('article'))}}"><h5 class="blog-description display-3 fw-bold border-top border-bottom border-dark py-1 trunc-body"> {{$article->subtitle}}</h5></a>
      <a href="{{route('article.show', compact('article'))}}"><p class="blog-description trunc-body display-5">{{$article->body}}</p></a>
      <p class="small fst-italic text-capitalize trunc-tags">Tags: 
        @foreach($article->tags as $tag)
          #{{$tag->name}}
        @endforeach
      </p>
      <a href="{{route('article.show', compact('article'))}}" class="text-touppercase mt-2 text-dark fw-bold">Continua a leggere...</a>
      <div class="card-profile">
        <img class="profile-img" src='https://images.unsplash.com/photo-1554780336-390462301acf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        <div class="card-profile-info row">
          <div class="col-6 col-md-12 d-flex justify-content-start align-items-end">
          <h3 class="profile-name">Redatto il: {{$article->created_at->format('d/m/Y')}} </h3> 
        </div>
        <div class="col-6 col-md-12 d-flex justify-content-start align-items-start">
          <h3 class="profile-name fst-italic">Di: <a class="fw-bold text-capitalize"  href="{{route('filter.user', ['user' =>$article->user->id])}}">{{$article->user->name}}</a></h3>
        </div>
        </div>
      </div>
      <span class="text-muted fst-italic mt-3"><i class="fa-solid fa-clock fa-spin"></i>  Tempo di lettura: {{$article->readDuration()}} min</span>
    </div>
  </div>
</div>