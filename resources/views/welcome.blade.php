<x-layout>
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-9 col-xl-9 col-md-10">
					<div class="text-center hero-content">
						@if (Auth::user() != null)
						<h1 class="mb-30 wow fadeInUp text-capitalize" data-wow-delay=".2s">Bentornato: {{ Auth::user()->name }}</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">inserisci un articolo dal bottone qua sotto </p></br>
						@else
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Benvenuto su The Aulab Post</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Politica, economia, sport...</p></br>
						@endif
						@auth
						<a href="{{ route('article.create') }}" rel="nofollow" class="main-btn btn-hover">INSERISCI UN ARTICOLO</a>
						@endauth
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- @if (session('message-green'))
	<div class="alert alert-success text-center">
		{{session('message-green')}} <i class="fa-solid fa-check"></i>
	</div>
@endif --}}
	<div class="search-area">
		<div class="container">
			<div class="search-wrapper">
				<form action="{{route('article.search')}}" method="GET">
					<div class="row justify-content-center mb-2">
						<h2 class="d-flex justify-content-center mb-2 align-items-center">Cerca articoli...</h2>
						<div class="col-lg-3 col-sm-5 col-10">
							<div class="search-input">
								<input type="search" name="query" aria-label="Search" id="keyword" placeholder="Cerca...">
							</div>
						</div>
						<div class="col-lg-2 col-sm-5 col-10">
							<div class="search-btn">
								<button class="main-btn-button btn-hover" type="submit">Ricerca<i class="fa-brands fa-searchengin fa-beat" style="color: #ffffff;"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<h2 class="mt-5 d-flex justify-content-center">ULTIMI ARTICOLI &nbsp;<i class="fa-solid fa-fire-flame-curved fa-fade" style="color: #ff6b6b;"></i></h2>
	<div class="container mt-5">
		<div class="row">
			@foreach ($articles as $article)
			<div class="col-12 col-lg-6 col-xl-4 col-md-6 justify-content-center d-flex" id="overflow-card">
				<x-card 
				:article="$article"
				/>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
              <h3 class="display-4 fw-bold lh-1 text-body-emphasis my-2">The Aulab Post</h3>
              <p class="lead text-dark">The Aulab Post è il sito che ti tiene aggiornato su tutto quello che succede nel mondo. Su The Aulab Post puoi leggere notizie di qualità su politica, economia, sport, tech e cucina. Puoi trovare articoli, analisi, opinioni, consigli, recensioni e ricette su vari argomenti di cultura generale. The Aulab Post è il tuo punto di riferimento per la cultura generale in tutte le sue sfaccettature. The Aulab Post: il mondo a portata di click. </p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start m-2">
                <a href="{{route('article.index')}}"><button type="button" class="main-btn btn-hover fw-bold">ESPLORA GLI ARTICOLI <i class="fa-solid fa-arrow-right fa-shake" style="color: #ffffff;"></i></button> </a>
              </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 mt-5 overflow-hidden shadow-lg d-flex justify-content-center">
                <img class="rounded-lg-3" src="https://img.freepik.com/premium-vector/collage-vintage-newspaper-background-with-torn-paper-style_553860-390.jpg?w=2000" alt="" width="800">
            </div>
          </div>
    </div>

	<div class="vh-50"></div>
</x-layout> 