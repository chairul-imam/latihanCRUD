<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title}}</title>
</head>
<body>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a class="underline text-gray-900 dark:text-white">Masukan Barang</a></div>
                    <div class="ml-12">
                        <form method="POST" action="{{ route('barang.tambah') }}">
                            @csrf
                            <input type="text" name="nama_barang" placeholder="Masukan nama barang" />
                            <input type="number" name="jumlah_barang" placeholder="Masukan jumlah" />
                            <button type="submit">simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Daftar Barang</div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>