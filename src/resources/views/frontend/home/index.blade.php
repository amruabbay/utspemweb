<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Beasiswa Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Data Beasiswa Mahasiswa Universitas Superior Tunggal</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
                <th>Indeks Prestasi Kumulatif (IPK)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beasiswas as $beasiswa)
            <tr>
                <td>{{$beasiswa->name}}</td>
                <td>{{$beasiswa->nim}}</td>
                <td>{{$beasiswa->jurusan}}</td>
                <td>{{$beasiswa->fakultas}}</td>
                <td>{{$beasiswa->indeks}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
