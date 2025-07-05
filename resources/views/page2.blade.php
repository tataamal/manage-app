<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage APP - {{ $name }}</title>
    <link rel="stylesheet" href="{{ asset('css/dash_style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="text">Welcome to the Page2</h1>
        <p class="text">This is the main dashboard of the application.</p>
        <p class="text">Here you can manage your application settings, view statistics, and more.</p>
        <div class="button">
            <a href="/"><button class="btn btn-danger">Back to Dashboard</button></a>
        </div>
        <div class="button">
            <a href="admin/create"><button class="btn btn-success">Go To Create</button></a>
        </div>
        <div class="button">
            <a href="admin/update"><button class="btn btn-warning">Go To Update</button></a>
        </div>
    </div>

    
</body>
</html>