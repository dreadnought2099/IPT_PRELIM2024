<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Picture Page</title>
</head>
<body>
    <div class="container">
        <h1>Picture Page</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/sample1.jpeg') }}" alt="Picture 1">
                    <div class="card-body">
                        <p class="card-text">Picture 1 Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/sample2.jpeg') }}" alt="Picture 2">
                    <div class="card-body">
                        <p class="card-text">Picture 2 Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/sample3.jpeg') }}" alt="Picture 3">
                    <div class="card-body">
                        <p class="card-text">Picture 3 Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
