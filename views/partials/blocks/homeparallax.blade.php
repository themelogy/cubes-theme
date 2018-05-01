@inject('pages','Modules\Page\Repositories\PageRepository')
@php $p = $pages->all() @endphp
<div class="home_parallax_box">
    <div class="home_parallax">
        <div id="scene" class="scene">
            <div class="layer" id="im" data-depth="0.20">
                <div style="background-image: url({{ Theme::url('images/pr_bg.jpg') }});"
                     class="layer_div layer_div_0"></div>
            </div>
            <div class="layer" id="im2" data-depth="0.40">
                <div style="background-image: url({{ Theme::url('images/pr_2.png') }});"
                     class="layer_div layer_div_2"></div>
            </div>
            <div class="layer" id="im1" data-depth="0.30">
                <div style="background-image: url({{ Theme::url('images/pr_1.png') }});"
                     class="layer_div layer_div_1"></div>
            </div>
            <div class="layer" id="im3" data-depth="0.50">
                <div style="background-image: url({{ Theme::url('images/pr_3.png') }});"
                     class="layer_div layer_div_3"></div>
            </div>
        </div>
    </div>
    <div class="home_parallax_pinler">
        <div id="scene2" class="scene2">
            <div class="layer layer_home_pin" id="im4" data-depth="0.40">
                <div class="home_pin_1 home_pin">
                    <a href="{{ $p->where('slug', 'cubes-konut')->first() }}" onmouseover="mouseoversound.playclip()">
                        <img src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.garden floor') }}</div>
                    </a>
                </div>
                <div class="home_pin_2 home_pin">
                    <a href="{{ route('page', 'cubes-plus') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.hotel') }}</div>
                    </a>
                </div>
                <div class="home_pin_3 home_pin">
                    <a href="{{ route('page', 'cubes-plus') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.infinity pool') }}</div>
                    </a>
                </div>
                <div class="home_pin_4 home_pin">
                    <a href="{{ route('page', 'cubes-plus') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.roof gym') }}</div>
                    </a>
                </div>
                <div class="home_pin_5 home_pin">
                    <a href="{{ route('page', 'cubes-konut') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.sky cubes') }}</div>
                    </a>
                </div>
                <div class="home_pin_6 home_pin">
                    <a href="{{ route('page', 'cubes-konut') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.hobby rooms') }}</div>
                    </a>
                </div>
                <div class="home_pin_7 home_pin">
                    <a href="{{ route('page', 'cubes-plus') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.theater center') }}</div>
                    </a>
                </div>
                <div class="home_pin_8 home_pin">
                    <a href="{{ route('page', 'cubes-plus') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.city park') }}</div>
                    </a>
                </div>
                <div class="home_pin_9 home_pin">
                    <a href="{{ route('page', 'cubes-konut') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.exclusive residence') }}</div>
                    </a>
                </div>
                <div class="home_pin_10 home_pin">
                    <a href="{{ route('page', 'cubes-ofis') }}" onmouseover="mouseoversound.playclip()"><img
                                src="{{ Theme::url('images/pin_img.png') }}" alt="">
                        <div class="home_pin_hover">{{ trans('themes::theme.home.cubes office') }}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>