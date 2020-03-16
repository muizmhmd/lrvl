<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>

    <form action="" method="get">
        <select name="class">
            <option value="" >Semua</option>
            <option value="6A" {{ ('6A' == $requestKelas) ? 'selected' : ''}}>6A</option>
            <option value="6B" {{ ('6B' == $requestKelas) ? 'selected' : ''}}>6B</option>
            <option value="6C" {{ ('6C' == $requestKelas) ? 'selected' : ''}}>6C</option>
            <option value="6D" {{ ('6D' == $requestKelas) ? 'selected' : ''}}>6D</option>
        </select>
        <button type="submit">Cari</button>
    </form>
    <table>
        <thead>
            <th>No.</th>
            <th>Kelas</th>
            <th>Nama</th>
        </thead>
        <tbody>
            @foreach ($students as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['class'] }}</td>
                    <td>{{ $item['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>