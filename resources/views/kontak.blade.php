<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Mahasiswa</title>
</head>
<body>
    <h2>Kontak Mahasiswa</h2>
    <nav>
        <ul style="list-style: none; padding: 0; display: flex; gap: 20px;">
            <li><a href="/home">Home</a></li>
            <li><a href="/dashboard">Profil Mahasiswa</a></li>
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