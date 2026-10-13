<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>IPK:</strong> {{ $mahasiswa['ipk'] }}</p>

    <a href="{{ url('/mahasiswa') }}">Kembali ke Daftar Mahasiswa</a>
</body>
</html>