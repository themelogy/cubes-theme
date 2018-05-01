jQuery(window).load(function() {
    $(".kurumsallink").click(function(e) {
        if ($(this).parent().hasClass('kurumsalselected')) {
            $(".kurumsalselected").removeClass("kurumsalselected");
        } else {
            $(".kurumsalselected").removeClass("kurumsalselected");
            if ($(this).next(".subsust").length) {
                $("body").addClass("kurumsalselected");
                $(this).next(".subsust").children().slideDown(0);
            }
        }
        e.stopPropagation();
    });
    $(".kurumsal_box_close, .btn--close, .btn--form-open, .projelink, .katplanlarilink, .basinlink, .iletisimlink").click(function() {
        $(".kurumsalselected").removeClass("kurumsalselected");
    });
    $(".projelink").click(function(e) {
        if ($(this).parent().hasClass('projeselected')) {
            $(".projeselected").removeClass("projeselected");
        } else {
            $(".projeselected").removeClass("projeselected");
            if ($(this).next(".subsust").length) {
                $("body").addClass("projeselected");
                $(this).next(".subsust").children().slideDown(0);
            }
        }
        e.stopPropagation();
    });
    $(".projebox_box_close, .btn--close,.btn--form-open, .kurumsallink, .katplanlarilink, .basinlink, .iletisimlink").click(function() {
        $(".projeselected").removeClass("projeselected");
    });
    $(".basinlink").click(function(e) {
        if ($(this).parent().hasClass('basinselected')) {
            $(".basinselected").removeClass("basinselected");
        } else {
            $(".basinselected").removeClass("basinselected");
            if ($(this).next(".subsust").length) {
                $("body").addClass("basinselected");
                $(this).next(".subsust").children().slideDown(0);
            }
        }
        e.stopPropagation();
    });
    $(".basin_box_close, .btn--close,.btn--form-open, .kurumsallink, .projelink, .katplanlarilink, .iletisimlink").click(function() {
        $(".basinselected").removeClass("basinselected");
    });
    $(".iletisimlink").click(function(e) {
        if ($(this).parent().hasClass('iletisimselected')) {
            $(".iletisimselected").removeClass("iletisimselected");
        } else {
            $(".iletisimselected").removeClass("iletisimselected");
            if ($(this).next(".subsust").length) {
                $("body").addClass("iletisimselected");
                $(this).next(".subsust").children().slideDown(0);
            }
        }
        e.stopPropagation();
    });
    $(".iletisim_box_close, .btn--close,.btn--form-open, .kurumsallink, .projelink, .katplanlarilink, .basinlink").click(function() {
        $(".iletisimselected").removeClass("iletisimselected");
    });
});
jQuery(document).ready(function() {
    jQuery(".btn--menu").click(function() {
        jQuery("body").addClass('menu_ac');
    });
    jQuery(".btn--close").click(function() {
        jQuery("body").removeClass('menu_ac');
    });
    jQuery(".btn--close").click(function() {
        //jQuery(".form").removeClass('form--open');
    });
    jQuery(".menu__item a").click(function() {
        jQuery(".form").removeClass('form--open');
    });
    jQuery(".iletisim_bilgi_form_link a").click(function() {
        jQuery("body").addClass('iletisim_bilgi_form_box');
    });
    jQuery(".form__close").click(function() {
        jQuery("body").removeClass('iletisim_bilgi_form_box');
    });
    jQuery(".btn--form-open").click(function() {
        jQuery("body").addClass('form_acik');
    });
    jQuery(".form__close").click(function() {
        jQuery("body").removeClass('form_acik');
    });
    jQuery(".btn--form-open1").click(function() {
        jQuery("body").addClass('form_acik1');
		/*
		var dil = "en";
		if ($('.home_acilirmenu_footer_diler > a').html() == "ENGLISH") dil = "tr";
		history.pushState('Cube biz sizi arayalı', 'Cube Biz Sizi Arayalı', '/'+dil+'/cubes');
		*/
    });
     jQuery(".btn--form-open3").click(function() {
        jQuery("body").addClass('form_acik3');
    });
       jQuery(".form__close").click(function() {
        jQuery("body").removeClass('form_acik3');
    });
    jQuery(".form__close").click(function() {
        jQuery("body").removeClass('form_acik1');
		//window.history.back();
    });
    jQuery(".formpopup_close").click(function() {
        jQuery("body").addClass('formpopup_acik');
    });
});
$(".projelink").click(function(e) {
    if ($(this).parent().hasClass('projesliderselected')) {
        $(".projesliderselected").removeClass("projesliderselected");
    } else {
        $(".projesliderselected").removeClass("projesliderselected");
        if ($(this).next(".subsust").length) {
            $("body").addClass("projesliderselected");
            $(this).next(".subsust").children().slideDown(0);
        }
    }
    e.stopPropagation();
});
$(".projebox_slider_box_close, .btn--close,.btn--form-open, .kurumsallink, .katplanlarilink, .basinlink, .iletisimlink").click(function() {
    $(".projesliderselected").removeClass("projesliderselected");
});