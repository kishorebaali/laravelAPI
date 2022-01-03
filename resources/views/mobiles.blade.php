<!DOCTYPE html>
<html>

<head>
    <title>mobiles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Model</th>
            <th>Price</th>
            <th>Action</th>

        </tr>


        @foreach ($data as $row)
        <tr>
            <td> {{$row['id']}} </td>
            <td> {{$row['brand']}} </td>
            <td> {{$row['model']}} </td>
            <td> {{$row['price']}}</td>
            <td><a href="{{'edit/'.$row['id']}}"><button type="submit" class="btn btn-primary">Edit</button></a>

                <a href="{{'delete/'.$row['id']}}"><button type="submit" class="btn btn-danger">Delete</button></a>
                <!-- <a href="{{ route('delete', $row['id']) }}">Delete</a> -->
                <!-- <form method="post" action="{{'delete/'.$row['id']}}">

                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form> -->
            </td>


        </tr>
        @endforeach
    </table>
</body>

</html>