<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('items.css') }}" />
    <title>Items List</title>

</head>

<body>

    <h2>Items List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Created At</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
