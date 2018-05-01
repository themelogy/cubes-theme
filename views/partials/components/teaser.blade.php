<a class="{{ $class ?? null }}" onmouseover="mouseoversound.playclip()" href="https://www.youtube.com/watch?v=e0apgSu6-Yo">{{ trans('themes::theme.buttons.teaser') }}</a>

@push('js-stack')
    {!! Theme::style('vendor/ypopup/YouTubePopUp.css') !!}
    {!! Theme::script('vendor/ypopup/YouTubePopUp.jquery.js') !!}
    <script type="text/javascript">
        jQuery(function () {
            jQuery("a.tanitim-filmi").YouTubePopUp();
            jQuery("a.teaser").YouTubePopUp();
        });
    </script>
@endpush