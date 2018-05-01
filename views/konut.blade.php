@extends('layouts.page')

@section('page', 'cubes_pages')

@section('content')
	<section class="icerik cubes_konut_article">
		@include('partials.cubes.residence')
		<!-- cubes_konut_details -->
		@include('partials.cubes.hobby-rooms')
		<!-- cubes_konut_hobiodalari -->
		@include('partials.cubes.sky-cubes')
		<!-- cubes_konut_skycubes -->
		@include('partials.cubes.car-park')
		<!-- cubes_ofis_otopark -->
		@include('partials.cubes.cafe-restaurant')
		<!-- cubes_ofis_kafe -->
		@include('partials.cubes.floor-garden')
		<!-- cubes_ofis_katbahcesi -->
		@include('partials.cubes.security')
		<!-- cubes_ofis_guvenlik -->
		@include('partials.cubes.facilities')
		<!-- cubes_plus_otel -->
		@include('partials.cubes.housekeeping')
		<!-- cubes_ofis_kathizmetleri -->
	</section>

@endsection