{!! Asset::css() !!}

@stack('css-stack')
{!! Theme::script('js/velocity.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/velocity-ayar.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/anime.min.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/main.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/menuayar.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/formayar.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/menusayfalar.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/jquery.mCustomScrollbar.concat.min.js', ['defer'=>'defer']) !!}
{!! Theme::script('vendor/fancybox/dist/jquery.fancybox.min.js') !!}
{!! Theme::script('js/jquery.navgoco.js', ['defer'=>'defer']) !!}
<script defer="defer" type="text/javascript" id="acc-javascript">
    $(document).ready(function () {
        $("#nav").navgoco({accordion: true});
    });
</script>
{!! Theme::script('js/jquery.bxslider.js', ['defer'=>'defer']) !!}
{!! Theme::script('js/rellax.js') !!}
<script>
    var rellax = new Rellax('.rellax', {
        center: true
    });
</script>
{!! Theme::script('js/jquery.nicescroll.js', ['defer'=>'defer']) !!}
<script>
    $(document).ready(function() {
        var nice = $("html").niceScroll();
        $("body").niceScroll({ cursorborder: "", cursorcolor: "#222", autohidemode: false, touchbehavior: true, zindex: "9999", boxzoom: true, scrollspeed: 100, mousescrollstep: 40 }); // First scrollable DIV

    });
</script>

<script>
    jQuery(document).ready(function () {
        jQuery(".footer_link_ac").click(function () {
            jQuery("body").addClass('footermenu');
        });
        jQuery(".footer_link_kapat, section").click(function () {
            jQuery("body").removeClass('footermenu');
        });
    });
    $(window).on('load resize', function () {
        var w = $(window).width();
        var h = $(window).height();
        $('.fullheight').height(h);
    });
</script>

<!-- Click Sound -->
<script>
    var html5_audiotypes = { //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
        "mp3": "audio/mpeg",
        "mp4": "audio/mp4",
        "ogg": "audio/ogg",
        "wav": "audio/wav"
    }

    function createsoundbite(sound) {
        var html5audio = document.createElement('audio')
        if (html5audio.canPlayType) { //check support for HTML5 audio
            for (var i = 0; i < arguments.length; i++) {
                var sourceel = document.createElement('source')
                sourceel.setAttribute('src', arguments[i])
                if (arguments[i].match(/\.(\w+)$/i))
                    sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
                html5audio.appendChild(sourceel)
            }
            html5audio.load()
            html5audio.playclip = function () {
                html5audio.pause()
                html5audio.currentTime = 0
                html5audio.play()
            }
            return html5audio
        }
        else {
            return {
                playclip: function () {
                    throw new Error("Your browser doesn't support HTML5 audio unfortunately")
                }
            }
        }
    }
    var mouseoversound = createsoundbite("{!! Theme::url('sound/click2.ogg') !!}", "{!! Theme::url('sound/click2.wav') !!}", "{!! Theme::url('sound/click2.mp3') !!}", "{!! Theme::url('sound/click2.mp4') !!}")


</script>


<script>
    $(function () {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll').addClass('animated');
        }
        $window.on('scroll', revealOnScroll);
        function revealOnScroll() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll:not(.animated)").each(function () {
                var $this = $(this),
                    offsetTop = $this.offset().top;

                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function () {
                            $this.addClass('animated ' + $this.data('animation'));
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll.animated").each(function (index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated ' + $this.data('animation'));
                    //  $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
                }
            });
        }
        revealOnScroll();
    });
</script>


{!! Asset::js() !!}

@stack('js-stack')
@stack('css-inline')
@stack('js-inline')


{!! Theme::style('css/custom.css') !!}