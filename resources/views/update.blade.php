<head>
    <title>mobiles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        ._11 {
            max-width: 300px;
            margin: auto;
            margin-top: 200px;

        }

        button {
            margin-top: 10px;
        }

        body {
            background-color: lightgrey;
        }

        .container {
            background-color: white;
            max-width: 300px;
            padding-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="_11">
            <form action="/edit" method="post">
                <!-- @method('post') -->
                @csrf
                <input type="hidden" value="{{$data['id']}}" name="id">
                <label>Brand</label>
                <input type="text" name="brandname" value="{{$data['brand']}}" class="form-control" placeholder="enter brand name">
                <label>Model</label>
                <input type="text" name="model" value="{{$data['model']}}" class="form-control" placeholder="enter model name">
                <label>Price</label>
                <input type="number" name="price" value="{{$data['price']}}" class="form-control" placeholder="enter price">
                <button class="btn btn-primary form-control" type="submit">update</button>
            </form>
        </div>
    </div>

</body>