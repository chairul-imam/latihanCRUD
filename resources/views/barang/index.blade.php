<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title}}</title>
</head>
<body>
    <a href="{{ route('barang.tambah') }}">
        <button>
            Masukan Barang
        </button>
    </a>
    <br>
    <br>
    <h3>Daftar Barang</h3>
    <table style="color: black;">
        <tbody>
            <thead>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Opsi</th>
            </thead>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{$barang->id}}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->jumlah_barang }}</td>
                <td> 
                    <a data-id_edit="{{ $barang->id }}" href="/barang/edit/{{ $barang->id }}"> 
                        edit
                    <a>
                    |
                    <a data-id_hapus="{{ $barang->id }}" href="/barang/hapus/{{ $barang->id }}">
                        hapus
                    <a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>