<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h1, h2 {
            color: #343a40;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .alert-success {
            margin-top: 20px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Import Data</h1>
        <form action="{{ route('import.data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h2>Import Mahasiswa dan Mata Kuliah</h2>
                <input type="file" name="file" class="form-control-file" required>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-primary">Upload File</button>
                <a href="{{ route('home') }}" class="btn btn-secondary ml-auto">Back</a>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
