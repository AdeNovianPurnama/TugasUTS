
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan Indomaret</title>
</head>
<body>
    
    <h1>Daftar Pegawai Indomaret</h1>
    <a href="Indomaret/Database/tambah">Tambah Data</a>

    <table border="1px" cellspacing="0" cellpadding="5px">
        <tr>
            <th>#</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
        @foreach($data_karyawan as $data)
        <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$data -> nip}}</td>
            <td>{{$data -> nama}}</td>
            <td>{{$data -> jenis_kelamin}}</td>
            <td>
                <a href="Indomaret/hapus/{{$data -> id}}">Hapus Database</a>
                <a href="Indomaret/Database/edit/{{$data -> id}}">Edit Database</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>