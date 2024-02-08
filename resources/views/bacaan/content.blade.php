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
    <h1 class="text-center">Cari Apa ?? 🫡🫡</h1>
@endforelse
