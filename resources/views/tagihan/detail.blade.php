@section('content')
<div class="container">
    <h3>PT PLN (Persero)</h3>
    <div class="form-information">
        <p>No. Kontrol <span>{{ $pelanggan->no_kontrol }}</span></p>
        <p>Nama Pelanggan <span>{{ $pelanggan->nama }}</span></p>
        <p>Kategori pelanggan <span>{{ $pelanggan->kategori }}</span></p>
        <p>Tarif kategori <span>{{ $pelanggan->tarif }}</span></p>
        <p>Total pemakaian <span>{{ $pelanggan->pemakaian }}</span></p>
        <p>Total tagihan <span>{{ $pelanggan->tagihan }}</span></p>
        <p>Biaya administrasi <span>{{ $pelanggan->admin }}</span></p>
        <p>Pajak <span>{{ $pelanggan->pajak }}</span></p>

    </div>
</div>

@endsection