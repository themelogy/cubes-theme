@extends('layouts.page')

@section('page', 'cubes_pages')

@section('content')
<section class="icerik cubes_plus_article" >
    @include('partials.cubes.plus')
	@include('partials.cubes.theater')
	@include('partials.cubes.meeting')
	@include('partials.cubes.commercial')
	@include('partials.cubes.infinity-pool')
	@include('partials.cubes.city-park')
	@include('partials.cubes.spa-massage')
	@include('partials.cubes.hotel')
	@include('partials.cubes.children-playground')
	@include('partials.cubes.roof-gym')
</section>
@endsection