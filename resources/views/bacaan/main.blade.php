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
    <div class="mobile-style-8">
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
    </div>
    <!-- Mobile Section End -->

    <!-- Search Section Start -->
    <section class="search-hotel-section section-b-space-2">
        <div class="custom-container">
            <form class="form-style-6">
                <div class="form-style-flex">
                    <div class="search-box">
                        <input type="search" class="form-control" placeholder="Cari Bacaan..">
                        <i class="ri-search-2-line"></i>
                    </div>

                    <button button="button" class="filter-button btn">
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

            <ul class="collection-product-list">

                @forelse ($bacaans as $bacaan)
                <li>
                    <a href="{{ route('detail',['slug' => $bacaan->slug]) }}{{ $bacaan->cek_parent ? ($bacaan->cek_parent->segmen_parent != null ? '?type=segmen' : '') : '' }}" class="collection-product-box text-center">
                        <div class="collection-image">
                            <img src="{{ asset('assets/images/bacaan/tumb_bacaan.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="collection-content-bacaan">
                            <h5>{{ $bacaan->judul_latin }}</h5>
                        </div>
                    </a>
                </li>
                @empty
                    <h1 class="text-center">Data Kosong</h1>
                @endforelse

            </ul>
        </div>
    </section>
    <!-- Collection Product Section End -->
@endsection
