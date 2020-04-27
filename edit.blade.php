<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
</head>
<body>
    
    @foreach ($data_karyawan as $data)
        <form action="/Indomaret/update" method="post">
            {{ csrf_field() }}

                <input type="hidden" name="id" value="{{$data -> id}}">
            <ul>
                <li>
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="nip" value="{{$data -> nip}}">
                </li>
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{$data -> nama}}">
                </li>
                <li>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$data -> jenis_kelamin}}">
                </li>

                <button type="submit" name="submit">Ubah</button>
            </ul>
        </form>
    @endforeach

</body>
</html>