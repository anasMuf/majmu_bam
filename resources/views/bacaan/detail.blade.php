@extends('layouts.app')

@push('css')
<style>
    .swiper {
        height: 100%;
    }
    .swiper .swiper-wrapper{
        margin-top: 60px;
    }
    .swiper [class^="swiper-button-"]{
        top: 20px;
        height: 51px;
    }
    .swiper .swiper-pagination{
        bottom: initial;
        top: 10px;
    }
</style>
<style>
    .header-detail{
        background-color: rgba(var(--theme-color), 1);
        color: white;
    }
    .box-margin{
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        margin: 90px auto 0;
    }
    .content-title{
        text-align: center;
        font-size: x-large;
        margin-bottom: 20px;
    }
    .content-body{
        text-align: end;
    }
    .content-body p{
        font-size: x-large;
        line-height: 60px;
    }
    .content-body .swiper-slide{
        text-align: start;
    }
    .content-body .swiper-slide p{
        font-size: x-large;
        line-height: 60px;
    }
</style>
@endpush

@section('content')
<!-- header Start -->
<header class="header-style-6 header-detail">
    <div class="left-header header-title w-100">
        <a
        {{-- @if ($type == 'segmen' && $segmen != null) --}}
        @if ($type == 'segmen' && $content != null)
        href="{{ route('detail',['slug'=>$slug]) }}?type=segmen"
        @else
        href="{{ route('beranda') }}"
        @endif

        style="color: white">
            <i class="ri-arrow-left-s-line"></i>
        </a>
        <h2 class="m-auto">{{ $title }}</h2>
    </div>
</header>
<!-- header End -->

<!-- Profile Box Section Start -->
<section class="nfy-profile-section">
    <div class="custom-container">
        <div class="nfy-profile-box arabic">
            <div class="box-margin"></div>

            @if ($type == 'segmen')
                <div class="content-body" id="content">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($segmens as $segmen)
                            <div class="swiper-slide" data-hash="slide{{ $segmen->segmen_parent }}">
                                @forelse ($bacaan_details as $bacaan_detail)
                                    @if ($bacaan_detail->segmen_parent == $segmen->segmen_parent){{-- && $bacaan_detail->segmen_child != null --}}
                                        @if ($bacaan_detail->segmen_child == 0 && $bacaan_detail->arb != null)
                                            <p @if($bacaan_detail->is_syiir || $bacaan_detail->segmen_child = null || ($bacaan_detail->arb == null && $bacaan_detail->ina != null)) class="text-center" @endif>@if($bacaan_detail->arb == null && $bacaan_detail->ina != null) {!! $bacaan_detail->ina !!} @else {!! $bacaan_detail->arb !!} @endif</p>
                                            @if ($bacaan_detail->arb != null)
                                            <hr>
                                            @endif
                                        @else
                                            <p @if($bacaan_detail->is_syiir || $bacaan_detail->segmen_child = null || ($bacaan_detail->arb == null && $bacaan_detail->ina != null)) class="text-center" @endif>@if($bacaan_detail->arb == null && $bacaan_detail->ina != null) {!! $bacaan_detail->ina !!} @else {!! $bacaan_detail->arb !!} @endif</p>
                                            @if ($bacaan_detail->arb != null)
                                            <hr>
                                            @endif
                                        @endif
                                    @endif
                                @empty
                                <h1 class="text-center">Data Kosong</h1>
                                @endforelse
                            </div>
                            @endforeach

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>
            @else
                <div class="content-title">
                    <label>{{ $awal ? $awal->arb : '' }}</label>
                </div>
                <div class="content-body" id="content">

                    @forelse ($bacaan_details as $bacaan_detail)
                    <p @if($bacaan_detail->is_syiir || ($bacaan_detail->arb == null && $bacaan_detail->ina != null)) class="text-center" @endif>@if($bacaan_detail->arb == null && $bacaan_detail->ina != null) {!! $bacaan_detail->ina !!} @else {!! $bacaan_detail->arb !!} @endif</p>
                    <hr>
                    @empty
                    <h1 class="text-center">Data Kosong</h1>
                    @endforelse

                </div>
            @endif

        </div>
    </div>
</section>
<!-- Profile Box Section End -->
@endsection

@push('js')

    <!-- Theme Setting js-->
    <script src="{{ asset('assets/js/theme-setting.js') }}"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            //slideActiveClass: 'swiper-slide-active',

            //spaceBetween: 50,
            //slidesPerView: 1,

            hashNavigation: {
                watchState: true,
            },

            direction: 'horizontal',
            loop: false,

            // If we need pagination
            pagination: {
              el: '.swiper-pagination',
              type: 'fraction',
            },

            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },

            //history: {
            //    key: 'slide',
            //},

        });
        swiper.changeLanguageDirection('rtl')
    </script>
@endpush
