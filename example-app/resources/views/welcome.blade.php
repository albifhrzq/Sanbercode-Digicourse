<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <p>Terima kasih sudah bergabung di Sanbercode.</p>

    @if(isset($data))
        <h2>Halo, {{ $data['first_name'] }} {{ $data['last_name'] }}!</h2>
    @endif
</body>
</html>