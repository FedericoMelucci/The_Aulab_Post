<x-layout>
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
    <div class="margin-custom mb-5">
			<div class="row">
				<div class="col-12 d-flex justify-content-center align-items-center">
					<h1 class="display-2 text-capitalize title-bycat" id="h1-category">{{$category->name}}</h1>
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
			<div class="container m-4">
				<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-start align-items-center">
				<h2 class="text-center">Nessun articolo per la categoria: <span class="text-capitalize"> {{$category->name}}</span></h2>
				</div>
				<div class="col-12 col-md-6 d-flex justify-content-end align-items-center">
				<img src="https://cdni.iconscout.com/illustration/premium/thumb/empty-state-2130362-1800926.png" class="m-3" width="100%" alt="">
				</div>
				</div>
			</div>
			@endforelse
		</div>
	</div>

</x-layout>