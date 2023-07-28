<x-layout>
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
    <div class="margin-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="d-flex justify-content-center mb-2 align-items-center text-uppercase fw-bold mt-5 article-tut">Tutti gli articoli</h1>
            </div>
        </div>
    </div>
	
	<div class="container">
		<div class="row justify-content-around">
			@forelse ($articles as $article)
			<div class="col-12 col-lg-4 col-md-3 justify-content-center d-flex">
				<x-card 
				:article="$article"
				/>
			</div>
			@empty
			<div class="container my-4">
				<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-start align-items-center">
				<h2 class="text-center">Nessun articolo disponibile <span class="text-capitalize"></span></h2>
				</div>
				<div class="col-12 col-md-6 d-flex justify-content-end align-items-center">
				<img src="https://cdni.iconscout.com/illustration/free/thumb/free-empty-box-4085812-3385481.png" class="m-3" width="100%" alt="">
				</div>
				</div>
				<div class="margin-art"></div>
			</div>
			@endforelse
		</div>
	</div>
	







</x-layout>