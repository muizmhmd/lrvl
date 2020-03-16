<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="{{route('students.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="nama" value="" required>
        <input type="text" name="class" placeholder="kelas" value="" required>
        <button>Tambah</button>
    </form>
</body>
</html>