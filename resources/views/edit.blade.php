<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    @foreach ($students as $item)
        @if ($item['id'] == request('student'))
            {{-- <form action="" method="post"> --}}
            <form action="{{route('students.update', $id)}}" method="post">
                @csrf
                @method('PUT')
                <input type="text" name="name" placeholder="nama" value="{{$item['name']}}" required>
                <input type="text" name="class" placeholder="kelas" value="{{$item['class']}}" required>
                <button>Update</button>
            </form>
        @endif
    @endforeach
</body>
</html>