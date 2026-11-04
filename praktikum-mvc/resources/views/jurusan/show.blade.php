<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>

    <p>
        <strong>Kode Jurusan:</strong>
        {{ $jurusan->kode }}
    </p>

    <p>
        <strong>Nama Jurusan:</strong>
        {{ $jurusan->nama }}
    </p>

    <p>
        <strong>Dibuat:</strong>
        {{ $jurusan->created_at->format('d-m-Y H:i') }}
    </p>

    <a href="{{ url('/jurusan') }}">Kembali ke Data Jurusan</a>
</body>
</html>