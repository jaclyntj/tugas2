<html>
    <head>
        <title>List Mata Kuliah</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>Jumlah SKS</th>
            </tr>
            @foreach ($matkul as $detailMatkul)
            <tr><td>   {{$detailMatkul['kode']}} </td><td> {{$detailMatkul['nama']}}</td> <td> {{$detailMatkul['sks']}}</td> </tr>
            @endforeach
        </table>
    </body>
</html>