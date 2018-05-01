@extends('layouts.master')

@section('page', 'home')

@section('content')

    @include('partials.components.homebutton')

    @include('partials.components.infobutton')

    @include('partials.header.navigation')

    @include('partials.blocks.homeparallax')

    @include('partials.blocks.corporate')

    @include('partials.blocks.project')

    @include('partials.blocks.press')

    @include('partials.blocks.contact')

@stop

@push('js-stack')
    {!! Theme::script('js/homeparallax.js', ['defer'=>'defer']) !!}
@endpush