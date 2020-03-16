<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    @foreach ($students as $item)
        @if ($item['id'] == request('student'))
            <div>ID : {{ $item['id'] }}</div>    
            <div>Nama : {{ $item['name'] }}</div>    
            <div>Kelas : {{ $item['class'] }}</div>
        @endif
    @endforeach
    <br>
    <a href="/students">Kembali</a>
</body>
</html>