<section class="acilirsayfabox basin_box fullheight">
    <div class="basin_box_close">X</div>
    <header>
        <span><img src="{!! Theme::url('images/cubes_logo_icerik.png') !!}" alt=""></span>
    </header>
    <article class="basin_liste">
        <ul class="thumbsfull mCustomScrollbar">
            @foreach(app(\Modules\Mediapress\Repositories\MediaRepository::class)->all()->sortByDesc('release_at') as $mediapress)
            <li>
                <div id="basinicerik26" class="basinicerik mCustomScrollbar">
                    <header class="basinicerik_baslik">
                        <h2>{{ $mediapress->title }}</h2></header>
                    <article class="basikicerik_aciklama"><img src="{{ $mediapress->present()->firstImage(768,null,'resize',80) }}" alt="{{ $mediapress->title }}" /></article>
                </div>
                <a class="fullink" href="javascript:;" data-src="#basinicerik26" data-fancybox></a>
                <div class="basin_resim resimhover"><img src="{{ $mediapress->present()->firstImage(190,185,'fit',80) }}" alt="{{ $mediapress->title }}" /></div>
                <div class="basin_isim">{!! $mediapress->description !!}</div>
                <div class="basin_tarih">{{ $mediapress->brand }} / {{ $mediapress->release_at->formatLocalized('%b %d, %Y') }} </div>
            </li>
            @endforeach
        </ul>
    </article>
    <div class="basin_box_hover"></div>
</section>