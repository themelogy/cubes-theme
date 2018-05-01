@extends('layouts.master')

@section('page', 'home')

@section('content')

    @include('partials.components.homebutton')

    @include('partials.components.infobutton')

    @include('partials.header.navigation')

    @include('partials.blocks.homeparallax')

@stop

@push('js-stack')
    {!! Theme::script('js/menusayfalar.js', ['defer'=>'defer']) !!}
    {!! Theme::script('js/homeparallax.js', ['defer'=>'defer']) !!}
@endpush