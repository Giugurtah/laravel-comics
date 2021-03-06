@extends('layouts/main')

@section('content')

<section class="primary_color">
    <div id="content" class="container fw_600 neutral_color_text">
        <header class="main_header d_inline_block brand_color txt_uppercase">Current series</header>
        <section class="card_display row_basic">
            @foreach($comics as $comic)
            <div class="comic_card">
                <a href="{{ url("/comic/$loop->index")}}" class="square d_inline_block" style="background-image: url('{{ ($comic['thumb']) }}')">
                </a>
                <h5 class="txt_uppercase">{{ $comic['series'] }}</h5>
            </div>
            @endforeach
        </section>
        <div class="button d_inline_block brand_color txt_uppercase fs_small">
        Load more
        </div>
    </div>
</section>

@stop