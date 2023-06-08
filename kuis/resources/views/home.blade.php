<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('templates.layout')
    @section('content')
    <div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded shadow-sm">
        <img class="me-3" src="{{ url('./assets/media/icons/iconibik.png') }}" alt="icon-ibik" width="45" height="45">
        <div class="lh-1">
            <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
            <small>Since 2011</small>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">This is a HOME page</h3>
        </div>
        <div class="card-body">
            Welcome folks..
        </div>
    </div>
    @endsection
</body>

</html>