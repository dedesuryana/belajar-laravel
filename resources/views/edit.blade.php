<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Document</title>
</head>
<body>
    <form action="/interaksi/{{ $data->id }}/update" method="post">
            @csrf
        <label>Interaksi 1</label>
        <input type="text" name="interaksi" value="{{ $data->interaksi }}">
        <label>Interaksi 2</label>
        <input type="text" name="interaksidua" value="{{ $data->interaksidua }}">
        <label>Interaksi 3</label>
        <input type="text" name="interaksitiga" value="{{ $data->interaksitiga }}">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>