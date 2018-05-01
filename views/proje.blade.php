@extends('layouts.page')

@section('page', 'cubes_pages')

@section('content')
    @push('js-inline')
    <script>
        function projeShow() {
            $(".projelink").trigger('click');
            $("body").addClass("projeselected").next(".subsust").children().slideDown(0);
            $(".projebox_box_close, .projebox_slider_box_close, footer").hide();
        }
        $(document).ready(function(){
            projeShow();
            $('.btn--close').on('click', function () {
                setTimeout(projeShow, 500);
            });
        });
    </script>
    @endpush
@endsection