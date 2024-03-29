<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PW-IBIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <style>
    html,
    body {
        overflow-x: hidden;
    }

    body {
        padding-top: 56px;
    }

    .bg-purple {
        background-color: #6f42c1 !important
    }
    </style>
</head>

<body class="bg-body-tertiary">
    <header>
        @extends('templates.headers.navigation')
    </header>

    <main class="container mt-5">
        @yield('content')
    </main>

    <footer class="container mt-5">
        <p class="fs-7">Copyright &copy; 2023</p>
    </footer>

    <script src="{{ url('./assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>