<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black-template')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('black-template')}}/img/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('black-template')}}/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('black-template')}}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="{{ asset('black-template')}}/demo/demo.css" rel="stylesheet" />
    <link href="{{ asset('black-template')}}/vendors/dropify/dropify.min.css" rel="stylesheet" />
    <script src="{{ asset('black-template') }}/js/core/jquery.min.js"></script>
</head>
