@section('content')
<form action="{{ route('tagihan.cari') }}"method="POST">
    @csrf
    <div class="form-group">
        <label for="no_kontrol">No Kontrol</label>
        <input type="text" name="no_kontrol">
    </div>
    <x-button variant="primary">Cari tagihan</x-button>
</form>

@endsection