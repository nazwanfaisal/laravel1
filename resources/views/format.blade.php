<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $dataa)
    id : {{ $dataa['id'] }} <br>
Name : {{ $dataa['name'] }} <br>
Usename : {{ $dataa ['username'] }} <br>
Email : {{ $dataa['email'] }} <br>
Alamat : {{ $dataa['alamat'] }} <br>

<hr>
    @endforeach
</body>
</html>
