<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table border="1">
            <thead>
                <th>name</th>
                <th>email</th>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>