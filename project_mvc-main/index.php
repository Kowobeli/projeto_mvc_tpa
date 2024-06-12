<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            
        }

        .btn{
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bem Vindo ao Sistema!</h1>
        <button onclick="location.href='Taskindex.php'" class="btn btn-primary">Ir para tasks</button>
        <button onclick="location.href='Userindex.php'" class="btn btn-primary">Ir para users</button>
    </div>
</body>
</html>