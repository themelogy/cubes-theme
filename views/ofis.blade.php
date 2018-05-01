@extends('layouts.page')

@section('page', 'cubes_pages')

@section('content')
<section class="icerik cubes_ofis_article">
	@include('partials.cubes.office')
	<!-- cubes_ofis_details -->
	@include('partials.cubes.secretariat')
	<!-- cubes_ofis_sekreterya -->
	@include('partials.cubes.cafe-restaurant')
	<!-- cubes_ofis_kafe -->
	@include('partials.cubes.floor-garden')
	<!-- cubes_ofis_katbahcesi -->
	@include('partials.cubes.security')
	<!-- cubes_ofis_guvenlik -->
	@include('partials.cubes.car-park')
	<!-- cubes_ofis_otopark -->
	@include('partials.cubes.housekeeping')
	<!-- cubes_ofis_kathizmetleri -->
</section>
@endsection