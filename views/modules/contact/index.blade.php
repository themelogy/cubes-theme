@extends('layouts.page')

@section('page', 'cubes_pages')

@section('content')
    @push('js-inline')
    <script>
        function iletisimShow() {
            $("body").addClass("iletisimselected");
            $(".iletisim_box_close, footer").hide();
        }
        $(function(){
            iletisimShow();
            $('.btn--close').on('click', function () {
               setTimeout(iletisimShow, 500);
            });
        });
    </script>
    @endpush
@endsection