<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
</head>
<body>
    
    <form action="save" method="POST">
    {{ csrf_field() }}

        <ul>
            <li>
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin">
            </li>

            <button type="submit" name="submit">Tambah</button>
        </ul>
    </form>

</body>
</html>