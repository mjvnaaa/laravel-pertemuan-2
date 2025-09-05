<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h2>Kontak Mahasiswa</h2>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/profile">Profil Mahasiswa</a></li>
            <li><a href="/kontak">Kontak</a></li>
            <li><a href="/biodata">Biodata</a></li>
        </ul>
    </nav>
    <table border="0" cellpadding="5">
    <tr>
        <td><strong>Kontak</strong></td>
        <td>:</td>
        <td>{{ $nomor }}</td>
    </tr>
</table>
</body>
</html>