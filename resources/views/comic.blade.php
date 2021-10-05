@extends('layouts/main')

@section('content')

<section id="comic">
    <div id="ruler"></div>
    <section class="container_small position_relative">
        <img src="{{ asset($comic['thumb']) }}" class="comic_img" alt="">
        <div class="comic_display row_basic">
            <div class="w2of3">
                <h1 class="mb-3">{{ $comic['title'] }}</h1>
                <div class="price_display row_aligned neutral_color_text mb-3">
                    <div class="w2of3 row_justified px-3 border_right">
                        <div>U.S. Price: <span class="bold">{{ $comic['price'] }}</span></div>
                        <div class="txt_uppercase">Available</div>
                    </div>
                    <div class="w1of3 txt_center px-3">
                        Check Availability <i class="fas fa-sort-down"></i>
                    </div>
                </div>
                <p class="neutral_color_aux_txt">
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="w1of3 txt_end">
                <div class="txt_uppercase mb-2">
                    Advertisement
                </div>
                <img class="adv_img" src="{{ asset('/images/adv.jpg') }}" alt="Img advertisement">
            </div>
        </div>
    </section>
    <section class="info_display lightergray">
        <div class="container_small row_basic py-4">
            <div class="w50 me-4">
                <h2 class="py-3 border_bottom">Talent</h2>
                <div class="row_justified py-2 border_bottom">
                    <div class="w1of3">
                        Art by:
                    </div>
                    <div class="w2of3">
                        @foreach ($comic['artists'] as $artist)
                            @if ($loop->index!=count($comic['artists'])-1)
                                <a class="brand_color_text" href=""> {{ $artist }},</a>
                            @else
                            <a class="brand_color_text" href=""> {{ $artist }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row_justified py-2 border_bottom">
                    <div class="w1of3">
                        Written by:
                    </div>
                    <div class="w2of3">
                        @foreach ($comic['writers'] as $writer)
                            @if ($loop->index!=count($comic['writers'])-1)
                                <a class="brand_color_text" href=""> {{ $writer }},</a>
                            @else
                            <a class="brand_color_text" href=""> {{ $writer }} </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w50 ms-4">
                <h2 class="py-3 border_bottom border_bottom">Specs</h2>
                <div class="row_justified py-2 border_bottom">
                    <div>Series:</div>
                    <div class="w50 txt_end">
                        <a class="brand_color_text txt_uppercase" href="">
                            {{ $comic['series'] }}
                        </a>
                    </div>
                </div>
                <div class="row_justified py-2 border_bottom">
                    <div>US Price:</div>
                    <div> {{ $comic['price'] }}</div>
                </div>
                <div class="row_justified py-2 border_bottom">
                    <div>On sale date:</div>
                    <div>{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </section>
</section>

@stop