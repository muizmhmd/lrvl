<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    @if (session('status'))
        <h1 style="color:green;">
            {{ session('status') }}
        </h1>
        <br>
    @endif

    <a href="/students/create">Tambah</a>
    <br>
    <br>
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
    <br>
    <table border="1">
        <thead>
            <th>No.</th>
            <th>Kelas</th>
            <th>Nama</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['class'] }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>
                    <a href="{{route('students.show', $student['id'])}}">Show</a>
                        <a href="{{route('students.edit', $student['id'])}}">Edit</a>
                        <form action="{{route('students.destroy', $student['id'])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="delete" value="DELETE">
                            <button onclick="return alert('apakah anda yakin?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>