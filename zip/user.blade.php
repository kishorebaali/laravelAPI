<head>
    <title>sample</title>
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
            <form action="{{route('registration')}}" method="post">

                @csrf
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="enter name">
                <label>email</label>
                <input type="email" name="email" class="form-control" placeholder="enter email">
                <label>mobile</label>
                <input type="tel" name="mobile" class="form-control" placeholder="enter mobile number">
                <label>password</label>
                <input type="password" name="password" class="form-control" placeholder="enter password">
                <button class="btn btn-primary form-control" type="submit">SignUp</button>
            </form>
        </div>
    </div>

</body>