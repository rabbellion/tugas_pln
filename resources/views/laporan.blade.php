<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Jika pakai Vite -->

</head>
<body>
<div class="form-container">
    <h2>Form Laporan</h2>
    <div class="tab-menu">
        <button id="tab-umum" class="tab active">Umum</button>
        <button id="tab-pelanggan" class="tab">Pelanggan</button>
    </div>

    <form id="form-umum" action="{{ route('laporan.umum') }}" method="POST"class="form-umum">
        @csrf
        <div class="form-group">
            <label>NIK<span class="required">*</span></label>
            <input type="text" name="nik" required>
        </div>
        <div class="form-group">
            <label>Nama<span class="required">*</span></label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Alamat<span class="required">*</span></label>
            <textarea id="alamat" name="alamat" rows="4" cols="50" required></textarea>
        </div>
        <div class="form-group">
            <label>Laporan<span class="required">*</span></label>
            <div class="select-group">
                <select name="kategori" required>
                    <option value="kerusakan">Kerusakan</option>
                    <option value="Kecelakaan">Kecelakaan</option>
                    <option value="Antisipasi">Antisipasi</option>
                    <option value="kendala">Kendala</option>
                </select>
                <select name="laporan" required>
                    <option value="kabel_listrik">Kabel Listrik</option>
                    <option value="Meteran_listrik">Meteran Listrik</option>
                    <option value="Tiang_Listrik">Tiang Listrik</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Kronologi</label>
            <textarea name="kronologi"></textarea>
        </div>

        <p class="info-text">
            Dengan mengirim laporan yang valid, anda membantu PT PLN (Persero)
        </p>

        <button type="submit" class="btn-kirim">kirim Laporan</button>
    </form>
    
    <form id="form-pelanggan" action="{{ route('laporan.pelanggan') }}" method="POST" style="display: none;">
        @csrf
        <div class="field-group">
            <label>No. Kontrol</label>
            <input type="text" name="no_kontrol">
        </div>
        <div class="field-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal">
        </div>
        <div class="field-group">
            <label>Laporan</label>
            <div class="select-group">
                <select name="kategori">
                    <option value="kerusakan">Kerusakan</option>
                    <option value="Kecelakaan">Kecelakaan</option>
                    <option value="Antisipasi">Antisipasi</option>
                    <option value="kendala">Kendala</option>
                </select>
                <select name="laporan" required>
                    <option value="kabel_listrik">Kabel Listrik</option>
                    <option value="Meteran_listrik">Meteran Listrik</option>
                    <option value="Tiang_Listrik">Tiang Listrik</option>
                </select>
            </div>
        </div>

        <div class="field-group">
            <label>kronologi</label>
            <textarea name="kronologi"></textarea>
        </div>

        <p class="info-text">
            Dengan mengirim laporan yang valid, anda telah membantu PT PLN (Persero)
        </p>

        <button type="submit" class="btn-kirim">Kirim laporan</button>
    </form>
</div>
<script>
    const tabUmum = document.getElementById('tab-umum');
    const tabPelanggan = document.getElementById('tab-pelanggan');
    const formUmum = document.getElementById('form-umum');
    const formPelanggan = document.getElementById('form-pelanggan');

    function showForm(activeForm, inactiveForm){
        inactiveForm.classList.remove('active');
        setTimeout(() => {
            inactiveForm.style.display = 'none';
            activeForm.style.display = 'block';
            setTimeout(() => {
                activeForm.classList.add('active');
            }, 10);
        }, 300);
    }
    tabUmum.addEventListener('click', () => {
        tabUmum.classList.add('active');
        tabPelanggan.classList.remove('active');
        showForm(formUmum, formPelanggan);
    });

    tabPelanggan.addEventListener('click', () => {
        tabPelanggan.classList.add('active');
        tabUmum.classList.remove('active');
        showForm(formPelanggan, formUmum);
    });

    formUmum.style.display = 'block';
    formUmum.classList.add('active');
</script>
</body>
</html>
