<!DOCTYPE html>
<html>
<head>
<title>1461900055</title>
</head>
<body>
    <h2>Rizky Fajar Hidayat 1461900055</h2>
    <h3>Tabel Buku</h3>
        <a href="/buku/ekspor"> ekspor</a>
<table border="1">
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>
</html>