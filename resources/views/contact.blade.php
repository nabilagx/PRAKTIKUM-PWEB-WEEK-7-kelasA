<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Home</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
          
        }

        th {
            background-color: #FB9AD1;
        }
        td {
            background-color: #F6F5F2;
        }
        
    </style>
</head>
<body>

@extends('app')

@section('content')
    <table class="table">
        <thead class="text-white"> 
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pekerjaan</th>
                <th>No. Telp</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $person)
                <tr>
                    <td>{{ $person['nama'] }}</td>
                    <td>{{ $person['email'] }}</td>
                    <td>{{ $person['pekerjaan'] }}</td>
                    <td>{{ $person['telp'] }}</td>
                    <td>{{ $person['tgl_lahir'] }}</td>
                    <td>{{ $person['jenis_kelamin'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


</body>

</html>