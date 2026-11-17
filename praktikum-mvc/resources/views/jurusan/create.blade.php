<h1>Tambah Jurusan</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jurusan.store') }}" method="POST">
    @csrf

    <div>
        <label for="kode">Kode Jurusan</label>
        <input
            type="text"
            id="kode"
            name="kode"
            value="{{ old('kode') }}"
        >
    </div>

    <br>

    <div>
        <label for="nama">Nama Jurusan</label>
        <input
            type="text"
            id="nama"
            name="nama"
            value="{{ old('nama') }}"
        >
    </div>

    <br>

    <button type="submit">Simpan</button>

    <a href="{{ route('jurusan.index') }}">Kembali</a>
</form>