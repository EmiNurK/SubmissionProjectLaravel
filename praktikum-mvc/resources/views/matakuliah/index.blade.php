<!DOCTYPE html>

<html> <head>     <title>Data Mata Kuliah</title> </head> <body>


<h2>Data Mata Kuliah</h2>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($matakuliah as $index => $mk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mk->kode_matakuliah }}</td>
                <td>{{ $mk->nama_matakuliah }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show', $mk->id) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data mata kuliah.</td>
            </tr>
        @endforelse
    </tbody>
</table>


</body> </html>
