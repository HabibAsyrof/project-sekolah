<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <t> {{ $item->id }}</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        @endforeach
    </table>
</body>
</html>