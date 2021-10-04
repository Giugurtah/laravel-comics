@extends('layouts/main')

@section('content')

<section id="comic">
    <div id="ruler"></div>
    <div class="container_small position_relative">
        <img src="{{ asset($comic['thumb']) }}" class="comic_img" alt="">
        <div class="row_basic">
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
            </div>
            <div class="w1of3"></div>
        </div>
    </div>
</section>

@stop