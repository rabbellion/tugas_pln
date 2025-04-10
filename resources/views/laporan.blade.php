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
        <button class="tab active">Umum</button>
        <button class="tab">Pelanggan</button>
    </div>

    <form action="{{ route('laporan.kirim') }}" method="POST">
        @csrf
        <label>NIK<span class="required">*</span></label>
        <input type="text" name="nik" required>

        <label>Nama<span class="required">*</span></label>
        <input type="text" name="nama" required>

        <label>Alamat<span class="required">*</span></label>
        <textarea name="alamat" required></textarea>

        <label>Laporan<span class="required">*</span></label>
        <div class="select-row">
            <select name="jenis_laporan" required>
                <option>Kerusakan</option>
                <option>Kecelakaan</option>
                <option>Antisipasi</option>
                <option>Kendala</option>
            </select>

            <select name="kategori" required>
                <option>Kabel Listrik</option>
                <option>Meteran</option>
                <option>Tiang Listrik</option>
            </select>
        </div>

        <label>Kronologi</label>
        <textarea name="kronologi"></textarea>

        <p class="info-text">
            Dengan mengirim laporan yang valid, anda telah membantu PT. PLN (Persero) dalam meningkatkan layanan sosial dan sarana masyarakat
        </p>

        <button type="submit" class="btn-kirim">Kirim Laporan</button>
    </form>
</div>
</body>
</html>
