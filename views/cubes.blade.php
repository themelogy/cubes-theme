<!doctype html>
<html>
<head>
    {!! seo_helper()->render() !!}
    <meta content="width=1000" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{!! Theme::url('ico/apple-touch-icon-144-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{!! Theme::url('ico/apple-touch-icon-114-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{!! Theme::url('ico/apple-touch-icon-72-precomposed.png') !!}">
    <link rel="apple-touch-icon-precomposed" href="{!! Theme::url('ico/apple-touch-icon-57-precomposed.png') !!}">
    <link rel="shortcut icon" href="{!! Theme::url('ico/favicon.png') !!}">
    <link rel="shortcut icon" href="{!! Theme::url('ico/favicon.ico') !!}" />
    <link rel="icon" href="{!! Theme::url('ico/favicon.ico') !!}" type="image/x-icon" />
    <link rel="shortcut icon" href="{!! Theme::url('ico/favicon.ico') !!}" type="image/x-icon" />

    {!! Theme::style('cubes/css/main.css') !!}
    {!! Theme::style('cubes/css/gcrid.css') !!}
    {!! Theme::style('cubes/css/reset.css') !!}
    {!! Theme::style('cubes/css/font-awesome.min.css') !!}
    {!! Theme::style('cubes/css/material-design-iconic-font.min.css') !!}
    {!! Theme::style('cubes/css/jquery.mCustomScrollbar.css') !!}
    {!! Theme::style('cubes/fancybox/dist/jquery.fancybox.min.css') !!}
    {!! Theme::style('cubes/css/responsive.css') !!}

    <!--[if lt IE 9]>
    {!! Theme::script('js/ie.js') !!}
    {!! Theme::style('css/ie.css') !!}
    <![endif]-->

    <!--[if lt IE 8]>
    <div class="chromeframe">
        <div class="chrome_box">
            You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.
        </div>
    </div>
    <![endif]-->

{!! Theme::script('js/jquery-1.12.4.min.js') !!}
{!! Theme::script('js/modernizr.custom.js') !!}

</head>
<body>

<header class="lp_header">
    <div class="lp_menu">
        <nav class="navbar">
            <div class="navbar-header">
                <a class="menu_btn" href="#"><img src="{{ Theme::url('cubes/images/lp_cubes_ikon_mobile.png') }}" alt=""><span>Menü</span></a>
                <a class="menu_close" href="#">X</a>
            </div>
            <div class="navbar-collapse">
                {!! Menu::render('landingpage', \Themes\Cubes\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
        </nav>
    </div>
    <div class="lp_slogan">
        <div class="lp_slogan_satir_1">
            {!! trans('themes::theme.cubes.slogan1') !!}
        </div>
        <div class="lp_slogan_satir_2">
            {!! trans('themes::theme.cubes.slogan2') !!}
        </div>
    </div>
    <div class="lp_formyeri">
        {!! Form::open(['@submit.prevent'=>'submitForm', 'route' => 'api.contact.send', 'method'=>'post', 'id'=>'formapp']) !!}
            <div class="lp_formyeri_logo">
                <img src="{{ Theme::url('cubes/images/ld_cubes_logo_light.png') }}" alt="">
            </div>
            <div class="lp_formyeri_baslik">
                {{ trans('themes::theme.cubes.we will call you') }}
            </div>
            <div class="lp_formyeri_altbaslik">
                {{ trans('themes::theme.cubes.inform') }}
            </div>
            <div class="lp_formyeri_yazi">
                {!! trans('themes::theme.cubes.inform desc') !!}
            </div>
            <div class="lp_formyeri_form" v-if="!contact.data">
                <div class="lp_formyeri_formsatir">
                    <div class="form-group" :class="{ 'has-error' : formErrors.first_name }">
                        {!! Form::input('text', 'first_name', null, ['maxlength'=>'125','placeholder'=>trans('themes::theme.cubes.name'), 'v-model'=>'formInputs.first_name']) !!}
                        <span v-for="error in formErrors.first_name" class="help-block validMessage">@{{ error }}</span>
                    </div>
                </div>
                <div class="lp_formyeri_formsatir">
                    <div class="form-group" :class="{ 'has-error' : formErrors.last_name }">
                        {!! Form::input('text', 'last_name', null,['maxlength'=>'125','placeholder'=>trans('themes::theme.cubes.surname'), 'v-model'=>'formInputs.last_name']) !!}
                        <span v-for="error in formErrors.last_name" class="help-block validMessage">@{{ error }}</span>
                    </div>
                </div>
                <div class="lp_formyeri_formsatir">
                    <div class="form-group" :class="{ 'has-error' : formErrors.phone }">
                        {!! Form::input('text,', 'phone', null,['maxlength'=>'125','placeholder'=>trans('themes::theme.cubes.phone'), 'v-model'=>'formInputs.phone']) !!}
                        <span v-for="error in formErrors.phone" class="help-block validMessage">@{{ error }}</span>
                    </div>
                </div>
                <div class="lp_formyeri_formsatir">
                    <div class="form-group" :class="{ 'has-error' : formErrors.email }">
                        {!! Form::input('text', 'email', null,['maxlength'=>'125','placeholder'=>trans('themes::theme.cubes.email'), 'v-model'=>'formInputs.email']) !!}
                        <span v-for="error in formErrors.email" class="help-block validMessage">@{{ error }}</span>
                    </div>
                </div>
                <div class="lp_formyeri_bilgiyazisi">
                    <div class="checkboxx">
                        <div class="form-group" :class="{ 'has-error' : formErrors.terms }">
                            <label class="radio_label" style="cursor:pointer;">
                                <input id="bilgiformu_check" type="checkbox" class="OdemeTip faturabilgi" name="terms" v-model="formInputs.terms" />
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                {!! trans('themes::theme.cubes.terms button') !!}
                            </label>
                            {{--<span v-for="error in formErrors.terms" class="help-block validMessage">@{{ error }}</span>--}}
                        </div>
                    </div>
                </div>
                <div class="lp_formyeri_button">
                    <button class="lp_gonder" type="submit">{{ trans('themes::theme.cubes.send') }}</button>
                </div>
            </div>
            <div class="lp_formyeri_form" v-if="contact.data">
                <div class="lp_formyeri_yazi">
                    <span v-if="contact.data">{{ trans('themes::contact.mail.dear') }} <strong>@{{ contact.data.first_name }} @{{ contact.data.last_name }}</strong></span>
                    <span v-html="contact.message"></span>
                </div>
            </div>

            <div class="address hidden-lg">
                <p>{!! setting('theme::address') !!}</p>
                <p><strong>{{ setting('theme::phone') }}</strong></p>
            </div>

        {!! Form::close() !!}
    </div>
</header>
<div style="display: none;" id="bilgilendirmeyazisi" class="bilgilendirmeyazisi">
    {!! trans('themes::theme.cubes.terms desc') !!}
</div>
<!-- header / -->
<section class="lp_main">
    <section class="section">
        <header class="lp_main_header">
            <a href="#"><img src="{{ Theme::url('cubes/images/ld_cubes_logo_dark.png') }}" alt=""></a>
            <div class="lp_main_headeryazi">
                {!! trans('themes::theme.cubes.title') !!}
            </div>
            <div class="lpmain_header_dokuzuncuyil">
                <img src="{{ Theme::url('cubes/images/399_10yil.jpg') }}" alt="">
            </div>
        </header>
        <section class="lp_main_alt">
            <div class="rows">
                <div class="col col6">
                    <div class="lp_main_alt_baslik">
                        <div class="lp_main_alt_baslik_ikon">
                            <img src="{{ Theme::url('cubes/images/ld_cubes_icon.png') }}" alt="">
                        </div>
                        <div class="lp_main_alt_baslik_yazi">
                            {!! trans('themes::theme.cubes.title lft') !!}
                        </div>
                    </div>
                    <div class="lp_main_yazi_resim">
                        <div class="lp_main_resim">
                            <img src="{{ Theme::url('cubes/images/ld_cubes_img_1.jpg') }}" alt="">
                        </div>
                        <div class="lp_main_yazi lp_main_yazi_sol">
                            {!! Block::get('cubes-left') !!}
                        </div>
                    </div>
                </div>
                <div class="col col6">
                    <div class="lp_main_alt_baslik">
                        <div class="lp_main_alt_baslik_ikon">
                            <img src="{{ Theme::url('cubes/images/ld_cubes_icon.png') }}" alt="">
                        </div>
                        <div class="lp_main_alt_baslik_yazi">
                            {!! trans('themes::theme.cubes.title rgt') !!}
                        </div>
                    </div>
                    <div class="lp_main_yazi_resim">
                        <div class="lp_main_resim">
                            <img src="{{ Theme::url('cubes/images/ld_cubes_img_2.jpg') }}" alt="">
                        </div>
                        <div class="lp_main_yazi">
                            {!! trans('themes::theme.cubes.right desc') !!}
                        </div>
                    </div>
                    <div class="lp_main_yazi_resim">
                        <div class="lp_main_resim">
                            <a href="http://www.netgd.com.tr" target="_blank">
                                <img class="pull-right" src="{{ Theme::url('cubes/images/netgd-logo.svg') }}" alt="Net Kurumsal Değerleme" height="100">
                            </a>
                        </div>
                        <div class="lp_main_yazi">
                            {!! trans('themes::theme.cubes.netgd') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="rows">
                <div class="lp_footer_logolar">
                    <div class="lp_footer_logolar_nuhoglu">
                        <a href="http://www.nuhogluinsaat.com.tr" target="_blank"><img src="{{ Theme::url('cubes/images/ld_nuhoglu_logo.png') }}" alt=""></a>
                    </div>
                    <div class="lp_footer_logolar_dalgic">
                        <a href="http://dalgicgy.com/" target="_blank"><img src="{{ Theme::url('cubes/images/ld_dalgic_logo.png') }}" alt=""></a>
                    </div>
                    <div class="lp_footer_logolar_lejant">
                        <a href="http://lejant.com/" target="_blank"><img src="{{ Theme::url('cubes/images/ld_lejant_logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<!-- main / -->

<!-- footer / -->

{!! Theme::script('cubes/js/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Theme::script('cubes/fancybox/dist/jquery.fancybox.min.js') !!}

<script type="text/javascript">
    $(document).ready(function() {
        $('body').css('display', 'none');
        $('body').fadeIn(1000);
        $('.menu_btn, .menu_close').on('click', function(){
           $('.navbar-collapse').slideToggle();
            if($('.menu_close').hasClass('active')) {
                $('.menu_close').removeClass('active');
            } else {
                $('.menu_close').addClass('active');
            }
        });
    });
</script>

{!! Theme::script('cubes/vue/js/vue.min.js') !!}
{!! Theme::script('cubes/vue/js/axios.min.js') !!}
{!! Theme::style('cubes/vue/css/pnotify.css') !!}
{!! Theme::script('cubes/vue/js/pnotify.js') !!}
{!! Theme::script('cubes/vue/js/loadingoverlay.min.js') !!}
<script>
    // Vue.config.devtools = true;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = '{{ csrf_token() }}';
    new Vue({
        el: '#formapp',
        data: {
            formInputs: {},
            formErrors: {},
            loading: false,
            success: false,
            error: false,
            contact: {}
        },
        methods: {
            submitForm: function (e) {
                e.preventDefault();
                this.success = false;
                this.error = false;
                this.ajaxStart(true);
                var form = e.srcElement;
                var action = form.action;
                var formData = new FormData();
                for (var key in this.formInputs) {
                    formData.append(key, this.formInputs[key]);
                }
                axios.post(action, formData).then(response => {
                    this.ajaxStart(false);
                    this.formInputs = {};
                    this.formErrors = {};
                    this.contact = response.data;
                    if(response.data.success === false) {
                        this.pnotify(response.data.message, 'error');
                    }
                }).catch(error => {
                    this.formErrors = error.response.data;
                    this.ajaxStart(false);
                    if(this.formErrors.success === false) {
                        this.pnotify(this.formErrors.message, 'error');
                    }
                });
            },
            ajaxStart: function (loading) {
                $.LoadingOverlaySetup({
                    background      : "rgba(0, 0, 0, 0.5)",
                    imageColor      : "#ffffff"
                });
                if (loading) {
                    $('.lp_header').LoadingOverlay("show");
                } else {
                    $('.lp_header').LoadingOverlay("hide");
                }
            },
            pnotify: function (message, type) {
                type = type ? type : 'success';
                var html = "<div class=\"notify\">";
                html += message;
                html += "</div>";
                PNotify.prototype.options.styling = "bootstrap3";
                new PNotify({
                    text: html,
                    type: type
                });
            }
        }
    });
</script>

</body>
</html>