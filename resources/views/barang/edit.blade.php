<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h3>Edit Barang</h3>
    
    <form action="{{ route('barang.update', ['barang' => $barang]) }}" method="post">
        @csrf
        <label for="nama">Nama Barang</label>
        <br>
        <input id="nama" name="nama_barang" type="text" value="{{ $barang->nama_barang }}">
        <br>
        <br>

        <label for="jumlah">Jumlah</label>
        <br>
        <input id="jumlah" name="jumlah_barang" type="text" value="{{ $barang->jumlah_barang }}">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>