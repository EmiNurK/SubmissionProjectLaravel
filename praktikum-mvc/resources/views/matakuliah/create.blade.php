<!DOCTYPE html>

<html> <head>     <title>Tambah Mata Kuliah</title> </head> <body>


<h2>Tambah Mata Kuliah</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <p>
        Kode Mata Kuliah<br>
        <input type="text" name="kode_matakuliah"
            value="{{ old('kode_matakuliah') }}">
    </p>

    <p>
        Nama Mata Kuliah<br>
        <input type="text" name="nama_matakuliah"
            value="{{ old('nama_matakuliah') }}">
    </p>

    <p>
        Jumlah SKS<br>
        <input type="number" name="sks"
            value="{{ old('sks') }}" min="1" max="6">
    </p>

    <button type="submit">Simpan</button>

    <a href="{{ route('matakuliah.index') }}">Kembali</a>
</form>


</body>
</html>
