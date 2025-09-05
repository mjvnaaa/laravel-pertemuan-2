<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h2>Biodata Mahasiswa</h2>
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
        <td><strong>Nama</strong></td>
        <td>:</td>
        <td>{{ $nama }}</td>
    </tr>
    <tr>
        <td><strong>Alamat</strong></td>
        <td>:</td>
        <td>{{ $alamat }}</td>
    </tr>
    <tr>
        <td><strong>Ttl</strong></td>
        <td>:</td>
        <td>{{ $ttl }}</td>
    </tr>
</table>

            <footer>
        &copy; mjvnaaa@2025
    </footer>
</body>
</html>