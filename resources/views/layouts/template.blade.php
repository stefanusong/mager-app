<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ !empty($site) ? $site->company_name : 'Template | Black and white' }}</title>
</head>

<body class="antialiased">
    <div class="w-3/4 mx-auto">
        @yield('content')
    </div>
</body>

</html>
