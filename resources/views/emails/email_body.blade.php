<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .bg-success {
            background: rgb(111,185,67);
            background: linear-gradient(40deg, rgba(111,185,67,1) 0%, rgba(63,151,67,0.7) 100%);
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-success min-vh-100">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="card col-6">
                <div class="card-body">
                    <p>{{ $name }}</p>
                    <p>{{ $company }}</p>
                    <p>{{ $email }}</p>
                    <p>{{ $phone }}</p>
                    <p>{{ $body }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
