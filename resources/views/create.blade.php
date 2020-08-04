<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>
<body>
    <form action="/interaksi/store" method="post">
        @csrf
    <label>Interaksi 1</label>
    <input type="text" name="interaksi">
    <label>Interaksi 2</label>
    <input type="text" name="interaksidua">
    <label>Interaksi 3</label>
    <input type="text" name="interaksitiga">
    <button type="submit">Simpan</button>
</form>

<table>
    <thead>
    <tr>
        <td> Nama </td>
    </tr>
    </thead>
    @foreach ($data as $a)
    <tbody>
        <tr>
            <td>{{ $a->interaksi }}</td>
            <td><a href="/interaksi/{{ $a->id }}">Update</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>