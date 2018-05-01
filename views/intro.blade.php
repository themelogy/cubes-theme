@php
seo_helper()->setSiteName('')
            ->meta()->setUrl(url('/'));
@endphp

@extends('layouts.master')

@section('page', 'home')

@section('content')
    <div class="loading">
        <svg id="triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="150px" height="136px" viewBox="0 0 32.5 29.7" style="overflow:scroll;enable-background:new 0 0 32.5 29.7;"
             xml:space="preserve">
		<style type="text/css">
            .st0{fill:#8E634A;}
            .st1{fill:#0F0F0F;  stroke:#fff;}
        </style>
            <defs>
            </defs>
            <g>
                <polygon class="st0" points="11.1,5.5 21.5,5.5 21.5,18.7 18.3,15.6 18.3,11.1 14.2,11.1 14.2,15.6 11.1,18.7" />
            </g>
            <g>
                <polygon class="st1" points="32.5,29.7 0,29.7 0,0 5.5,5.5 5.5,24.2 27,24.2 27,5.5 32.5,0" />
            </g>
		</svg>
    </div>

    <div class="intro_bg">
        <div class="fullscreen-bg">
            <video width="100%" height="100%" class="fullscreen-bg__video" autoplay muted loop webkit-playsinline>
                <source type="video/mp4" src="{!! Theme::url('video/hizmet.mp4') !!}"></source>
            </video>
        </div><!-- video -->
    </div>

    <div class="intro_pattern"></div>
    <section class="intro_box">
        <header class="intro_logo">
            <img src="{{ Theme::url('images/intro_logo.png') }}" alt=""/>
        </header>
        <article class="intro_text mCustomScrollbar">
            <header class="intro_text_baslik font_hero">{!! trans('themes::theme.intro.slogan1') !!}</header>
        </article>
        <div class="intro_link font_soin sitelink">
            <a href="{{ url(LaravelLocalization::getCurrentLocale()) }}" onmouseover="mouseoversound.playclip()"><span data-hover="{{ trans('themes::theme.buttons.explore') }}">{{ trans('themes::theme.buttons.explore') }}</span></a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="intro_footer">
        <div class="footer-header">
            @include('partials.components.teaser' ,['class'=>'btn btn-border btn-xs tanitim-filmi'])
        </div>
        <div class="footer_butonyer">
            <div class="footer_link_ac"><i class="zmdi zmdi-menu"></i></div>
            <div class="footer_link_kapat"><i class="zmdi zmdi-close"></i></div>
        </div>
        <div class="intro_footer_box">
            <div class="intro_footer_center">
                <div class="intro_footer_center_sosyal">
                    @include('partials.components.social')
                </div>
                <div class="intro_footer_center_bilgiformulink font_soin sitelink">
                    <a href="{{ route('page', 'cubes') }}" class="btn btn--default" onmouseover="mouseoversound.playclip()"
                       id="btn_form_id"><span data-hover="{{ trans('themes::theme.buttons.we call you') }}">{{ trans('themes::theme.buttons.we call you') }}</span></a>

                </div>
                <div class="intro_footer_center_tel">
                    <a href="tel:4442287" onmouseover="mouseoversound.playclip()">{{ setting('theme::phone') }}</a>

                </div>
            </div>
            <div class="intro_footer_left">
                @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                    @if($locale != LaravelLocalization::getCurrentLocale())
                        <a hreflang="{{ $locale }}" href="{{ url("/?lang=$locale") }}" onmouseover="mouseoversound.playclip()">{{ mb_strtoupper($supportedLocale['native']) }}</a>
                    @endif
                @endforeach
            </div>
            <div class="intro_footer_right firmalar_logolar">
                <a class="nuhoglulogo" href="http://www.nuhogluinsaat.com.tr" target="_blank"
                   onmouseover="mouseoversound.playclip()"><img src="{{ Theme::url('images/nuhoglu_logo.png') }}"
                                                                alt=""/></a>
                <a class="dalgiclogo" target="_blank" href="http://dalgicgy.com/"
                   onmouseover="mouseoversound.playclip()"><img src="{{ Theme::url('images/dalgic_gy_logo.png') }}" alt=""/></a>
                <a class="lejantlogo" target="_blank" href="http://www.lejant.com/" onmouseover="mouseoversound.playclip()"><img
                            src="{{ Theme::url('images/lejant_logo.png') }}" alt=""/></a>

            </div>
        </div>
        <div class="footer_butonyer">
            <div class="footer_link_ac"><i class="zmdi zmdi-menu"></i></div>
            <div class="footer_link_kapat"><i class="zmdi zmdi-close"></i></div>
        </div>
    </footer>
@endsection

@push('js-stack')
    {!! Theme::script('js/velocity.js', ['defer'=>'defer']) !!}
@endpush