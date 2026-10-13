<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Status Akademik</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['nim'] }}</td>
                    <td>{{ $m['ipk'] }}</td>
                    <td>
                        @if ($m['ipk'] >= 3.5)
                            Cum Laude
                        @elseif ($m['ipk'] >= 3.0)
                            Baik
                        @else
                            Perlu ditingkatkan
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>