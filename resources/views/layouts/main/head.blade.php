<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
