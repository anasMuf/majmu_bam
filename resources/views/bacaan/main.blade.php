@extends('layouts.app')

@push('css')
    {{-- <livewire:styles/>
    <livewire:scripts/> --}}
@endpush

@section('content')
    <!-- header Start -->
    <header class="header-style-6">
        <div class="left-header">
            <a href="#">
                {{-- <img src="{{ asset('assets/images/logo/7.svg') }}" class="img-fluid" alt=""> --}}
                <h2 style="color: black">Majmu' Al Manan</h2>
            </a>
        </div>

        {{-- <div class="right-header">
            <a href="profile.html" class="profile-image profile-image-2">
                <img src="{{ asset('assets/images/grocery/dp.jpg') }}" class="img-fluid" alt="">
            </a>
        </div> --}}
    </header>
    <!-- header End -->

    <!-- Mobile Section Start -->
    {{-- <div class="mobile-style-8">
        <ul>
            <li class="active">
                <a href="{{ route('beranda') }}">
                    <i class="ri-home-6-line"></i>
                    <h6>Beranda</h6>
                </a>
            </li>
            <li>
                <a href="{{ Auth::user() ? route('profileUser') : route('profileGuest') }}">
                    <i class="ri-user-3-line"></i>
                    <h6>Akun</h6>
                </a>
            </li>
        </ul>
    </div> --}}
    <!-- Mobile Section End -->

    <!-- Action Sheet Button Start -->
    {{-- <div class="action-sheet-button px-15 section-t-space-3 mb-3">
        <button class="btn btn-gray" data-bs-toggle="offcanvas" data-bs-target="#filter-button">Atur ukuran font</button>
    </div> --}}
    <!-- Action Sheet Button End -->

    <!-- Sort Offcanvas Start -->
    {{-- <div class="offcanvas filter-button offcanvas-bottom theme-bottom-offcanvas" tabindex="-1" id="filter-button">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Pengaturan</h5>
        </div>
        <div class="offcanvas-body">
            <div class="price-range-section">
                <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">
                    <div class="range-slider">

                        <div class="progress"></div>
                        <span class="range-min-wrapper">
                            <input class="range-min" type="range" min="0" max="100" value="1">
                        </span>
                        <span class="range-max-wrapper">
                            <input class="range-max" type="range" min="0" max="100" value="50">
                        </span>
                    </div>
                    <div class="value-box">
                        <div class="min-value numberVal">
                            <input type="number" min="0" max="100" value="1" disabled>
                        </div>
                        <div class="max-value numberVal">
                            <input type="number" min="0" max="100" value="50" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Sort Offcanvas End -->

    <!-- Search Section Start -->
    <section class="search-hotel-section section-b-space-2">
        <div class="custom-container">
            <form class="form-style-6 formCari">
                <div class="form-style-flex">
                    <div class="search-box">
                        <input type="search" name="cari" class="form-control" placeholder="Cari Bacaan..">
                        <i class="ri-search-2-line"></i>
                    </div>

                    <button button="button" class="filter-button btn" id="btnCari">
                        <i class="ri-search-line"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- Search Section End -->

    <!-- Collection Product Section Start -->
    <section>
        <div class="custom-container">
            <div class="collection-title section-b-space-2">
                {{-- <h4>Pilih </h4>
                <p>This category has enjoyed some of the highest selling prices and also represents the first NFT use
                    case.</p> --}}
            </div>

            <div class="preloader" style="display: none;">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
            </div>

            <ul class="collection-product-list">


            </ul>
        </div>
    </section>
    <!-- Collection Product Section End -->
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            dataContent()
        });
    </script>
    <script>
        function preload(param) {
            console.log(param);
            $('.collection-product-list').hide()
            $('.preloader').show()
        }

        function dataContent(param=null) {
            $('.collection-product-list').hide()
            $('.preloader').show()
            $.get("{{ route('bacaan') }}", {
                cari:param
            }).done(function (data) {
                $('.preloader').hide()
                $('.collection-product-list').html(data.content).fadeIn()
                $('.collection-product-list').show()

            }).fail(function(xhr, status, error){
                console.log(error);
            })
        }

        $('.formCari').submit(function(e){
            e.preventDefault()
            let cari = $('input[name=cari]').val()
            dataContent(cari)
        })
    </script>
@endpush
