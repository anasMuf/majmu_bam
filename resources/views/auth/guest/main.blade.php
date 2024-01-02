@extends('layouts.app')

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
        <li>
            <a href="{{ route('beranda') }}">
                <i class="ri-home-6-line"></i>
                <h6>Beranda</h6>
            </a>
        </li>
        <li class="active">
            <a href="{{ Auth::user() ? route('profileUser') : route('profileGuest') }}">
                <i class="ri-user-3-line"></i>
                <h6>Akun</h6>
            </a>
        </li>
    </ul>
</div>
<!-- Mobile Section End -->
<section class="nft-authentication">
    <div class="custom-container">
        <div class="author-image">
            <img src="../assets/images/nft/author.png" class="img-fluid" alt="">
        </div>

        <div class="author-title">
            <h3>Login</h3>
            {{-- <p></p> --}}
        </div>

        <form action="{{ route('auth') }}" method="POST" class="form-box-11">
            @csrf
            <div class="form-floating form-box">
                <input type="username" autocomplete="nope" class="form-control" id="username" placeholder="Tulis username anda">
                <label for="username">Username</label>
                <i class="ri-user-line"></i>
            </div>
            <div class="form-floating form-box">
                <input type="password" autocomplete="new-password" class="form-control" id="password" placeholder="Tulis password anda">
                <label for="password">Password</label>
                <i class="ri-lock-line"></i>
            </div>
            <a href="index.html" class="nft-btn dark-btn text-center mt-3">Masuk</a>
            <span class="already-author">
                <a href="#">gak punya?, buat baru</a>
            </span>
        </form>
    </div>
</section>
@endsection
