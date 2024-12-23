<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container center-screen">
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('import.index') }}" class="btn btn-primary">Import Data</a>
                <a href="{{ route('krs.index') }}" class="btn btn-secondary">View Data</a>
            </div>
        </div>
    </div>
</body>
</html>
