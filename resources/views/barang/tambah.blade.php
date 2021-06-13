<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h3>Tambah Barang</h3>
    <form method="POST" action="{{ route('barang.simpan') }}">
        @csrf
        <input type="text" name="nama_barang" placeholder="Masukan nama barang" />
        <br>
        <br>
        <input type="number" name="jumlah_barang" placeholder="Masukan jumlah" />
        <br>
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>