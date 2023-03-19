<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <h1>Pesan Pengunjung</h1>
    <p>Nama : {{ $details['nama'] }}</p>
    <p>Email : {{ $details['email'] }}</p>
    <p>Handphone : {{ $details['kontak'] }}</p>
    <p>Pesan : {{ $details['pesan'] }}</p>
</body>

</html>
