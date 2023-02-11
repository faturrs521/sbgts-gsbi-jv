<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #0172b8;
            color: white;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center">Data Anggota SBGTS-GSBI PT. Victory Chingluh Indonesia</h2>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Kode DEPT</th>
            <th>DEPT</th>
            <th>TMK</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($dataAnggota as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>0{{ $row->nik }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>{{ $row->kodedept }}</td>
                <td>{{ $row->dept }}</td>
                <td>{{ $row->tmk }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
