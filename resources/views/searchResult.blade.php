@extends('layouts.master')

@section('header')
    <header class="header sub">
    	<div class="header__form_wrapper">
    		@include ('incs/search-form')
    	</div>
    </header>
@endsection


@section('content')

	@if( $pageNum != 0 )
	<section class="gallery">
		<div class="container">
			<div class="gallery__wrapper">
				<h2 class="title center dark">{{ $keyword }}</h2>
				<p class="subtitle center dark">We found <strong>{{ number_format($foundPhotos) }}</strong> photos matching your search!</p>
				
				<div class="row js-masonry js-images-loaded">
					@foreach($getPhotos as $photo)
					<div class="col-lg-4 col-md-6 grid-item js-masonry-item">
						<div class="card">
							<a href="{{ $photo['links']['download'] }}" class="card__img_wrapper" title="{{ $photo['description'] }}" target="_blank">
								<img class="card__img" alt="{{ $photo['description'] }}" src="{{ $photo['urls']['small'] }}">
							</a>
							<div class="card__info_box">
								<a href="#" class="card__link" onclick="return false;">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.668 426.668" style="enable-background:new 0 0 426.668 426.668;" xml:space="preserve"><path style="fill:#f13030;" d="M401.788,74.476c-63.492-82.432-188.446-33.792-188.446,49.92c0-83.712-124.962-132.356-188.463-49.92c-65.63,85.222-0.943,234.509,188.459,320.265C402.731,308.985,467.418,159.698,401.788,74.476z"/></svg>
									<span>{{ number_format($photo['likes']) }}</span>
								</a>
								<a href="{{  $photo['links']['download'] }}" class="card__link download" target="_blank" title="Donwload high-res photo: {{ $photo['description'] }}">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;" xml:space="preserve"><path style="fill:#fff;" d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/></svg>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</section>
	<section class="pagination">
		<ul class="pagination__list">
			@if( $pageNum == 1 )
			<li class="pagination__item">
				<a class="pagination__link pre" title="Previous Page"><span>&larr;</span> Prev</a>
			</li>
			<li class="pagination__item">
				<a href="/search/{{ str_replace(' ', '-', $keyword) }}/page/{{ $pageNum + 1 }}" class="pagination__link next" title="Next Page">Next <span>&rarr;</span></a>
			</li>

			@elseif( $pageNum < $totalPages )
			<li class="pagination__item">
				<a href="/search/{{ str_replace(' ', '-', $keyword) }}/page/{{ $pageNum - 1 }}" class="pagination__link pre" title="Previous Page"><span>&larr;</span> Prev</a>
			</li>
			<li class="pagination__item">
				<a href="/search/{{ str_replace(' ', '-', $keyword) }}/page/{{ $pageNum + 1 }}" class="pagination__link next" title="Next Page">Next <span>&rarr;</span></a>
			</li>

			@elseif($pageNum == $totalPages)
			<li class="pagination__item">
				<a href="/search/{{ str_replace(' ', '-', $keyword) }}/page/{{ $pageNum - 1 }}" class="pagination__link pre" title="Previous Page"><span>&larr;</span> Prev</a>
			</li>
			<li class="pagination__item">
				<a class="pagination__link next" title="Next Page">Next <span>&rarr;</span></a>
			</li>
			@endif
		</ul>
	</section>

	@else
	<section class="gallery">
		<div class="container">
			<div class="gallery__wrapper">
				<h2 class="title center dark">No Photos Found!</h2>
				<div class="alert">
					<p>
						We were unable to find any photos matching your search term! <br>
						Please try another keyword...
					</p>
				</div>
			</div>
		</div>
	</section>
	@endif
@endsection

@section('script')
<script type="text/javascript" src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="{{ asset('app.js') }}"></script>
@endsection
