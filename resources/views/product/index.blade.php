<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width="100%" border="1px solid">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <th>{{ $product->id }}</th>
            <th>{{ $product->name }}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>