<section class="proje_box fullheight">
    <div class="projebox_left mCustomScrollbar">
        <div class="projebox_box_close">X</div>
        <div class="projebox_aciklama">
            {!! Block::get('proje') !!}
        </div>
    </div>
    <div class="projebox_slider">
        <div class="projebox_slider_box_close">X</div>
        <div class="slider-next"></div>
        <div class="slider-prev"></div>
        <ul class="proje_slider">
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_1.jpg') }})"><a href="{{ Theme::url('images/proje_slider_1_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_2.jpg') }})"><a href="{{ Theme::url('images/proje_slider_2_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_3.jpg') }})"><a href="{{ Theme::url('images/proje_slider_3_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_4.jpg') }})"><a href="{{ Theme::url('images/proje_slider_4_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_5.jpg') }})"><a href="{{ Theme::url('images/proje_slider_5_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_6.jpg') }})"><a href="{{ Theme::url('images/proje_slider_6_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_7.jpg') }})"><a href="{{ Theme::url('images/proje_slider_7_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_8.jpg') }})"><a href="{{ Theme::url('images/proje_slider_8_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_9.jpg') }})"><a href="{{ Theme::url('images/proje_slider_9_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_10.jpg') }})"><a href="{{ Theme::url('images/proje_slider_10_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_11.jpg') }})"><a href="{{ Theme::url('images/proje_slider_11_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_12.jpg') }})"><a href="{{ Theme::url('images/proje_slider_12_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
            <li>
                <div class="projeslider_bg" style="background-image:url({{ Theme::url('images/proje_slider_13.jpg') }})"><a href="{{ Theme::url('images/proje_slider_13_x.jpg') }}"  data-fancybox="proje"></a></div>
            </li>
        </ul>
    </div>
    <div class="proje_box_hover"></div>
</section>

@push('js-inline')
    {!! Theme::script('js/jquery.bxslider.js', ['defer'=>'defer']) !!}
    <script>
        $(document).ready(function () {
            $('.proje_slider').bxSlider({
                nextSelector: '.slider-next',
                auto: true,
                prevSelector: '.slider-prev'
            });
        });
    </script>
@endpush