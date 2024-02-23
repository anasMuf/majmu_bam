@extends('layouts.app')

@push('css')
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
            text-align: start;
        }
        .content-body p{
            font-size: x-large;
            line-height: 60px;
        }
    </style>
    {{-- <livewire:styles/>
    <livewire:scripts/> --}}
@endpush

@section('content')
<!-- header Start -->
<header class="header-style-6 header-detail">
    <div class="left-header header-title w-100">
        <a href="{{ route('beranda') }}" style="color: white">
            <i class="ri-arrow-left-s-line"></i>
        </a>
        <h2 class="m-auto">{{ $title }}</h2>
    </div>
</header>
<!-- header End -->

<!-- Profile Box Section Start -->
<section class="nfy-profile-section">
    <div class="custom-container">
        <div class="nfy-profile-box">
            <div class="box-margin"></div>
            <div class="content-title">
                {{-- <label>{{ $awal ? $awal->arb : '' }}</label> --}}
            </div>
            <div class="content-body" id="content">
                <div class="main-page-segmen">
                    <ul>
                        @forelse ($segmens as $segmen)
                        <li class="mb-2">
                            {{-- <a href="{{ route('detail',['slug' => $slug]) }}?type=segmen&segmen={{ $segmen->segmen_parent }}#slide{{ $segmen->segmen_parent }}"> --}}
                            <a href="{{ route('detail',['slug' => $slug]) }}?type=segmen&content=detail#slide{{ $segmen->segmen_parent }}" id="{{ $segmen->segmen_parent }}"  onclick="preloadSegmen(this.id)">
                                <div class="card">
                                    <div class="card-body">
                                        {{ $segmen->ina }}
                                    </div>
                                </div>
                            </a>
                        </li>
                        @empty
                        <h1 class="text-center">Data Kosong</h1>
                        @endforelse
                    </ul>
                </div>
                <div class="preload-segmen text-center" style="display: none;">
                    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile Box Section End -->
@endsection

@push('js')

    <!-- Theme Setting js-->
    <script src="{{ asset('assets/js/theme-setting.js') }}"></script>
    <script>

        function preloadSegmen(param) {
            console.log(param);
            $('.main-page-segmen').hide()
            $('.preload-segmen').show()
        }
    </script>
@endpush
