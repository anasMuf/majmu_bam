@forelse ($bacaans as $bacaan)
<li>
    <a href="{{ route('detail',['slug' => $bacaan->slug]) }}{{ $bacaan->cek_parent ? ($bacaan->cek_parent->segmen_parent != null ? '?type=segmen' : '') : '' }}" class="collection-product-box text-center" id="{{ $bacaan->slug }}" onclick="preload(this.id)">
        <div class="collection-image">
            <img src="{{ asset('assets/images/bacaan/'.$bacaan->gambar) }}" class="img-fluid" alt="" width="112" height="112">
        </div>
        <div class="collection-content-bacaan">
            <h5>{{ $bacaan->judul_latin }}</h5>
        </div>
    </a>
</li>
{{-- <script>
    var slugBacaan = "{{ $bacaan->slug }}"
    $('#'+slugBacaan).click(function(e) {
        e.preventDefault()
        console.log('llll');
        window.location.href = this.href
    })
</script> --}}
@empty
    <h1 class="text-center">Cari Apa ?? 🫡🫡</h1>
@endforelse
