<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qisalyde</title>
    @vite('resources/ts/app.ts')
</head>

<body>
    <div class="container">
        @include('navbar')
        @yield('content')
    </div>
</body>

</html>
