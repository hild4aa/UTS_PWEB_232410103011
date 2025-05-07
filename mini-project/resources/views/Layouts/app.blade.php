<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Mini Project')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1 0 auto;
        }
        .footer {
            flex-shrink: 0;
            background-color: #f0f0f0;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    @unless(Request::is('login'))
        <x-navbar />
    @endunless
    
    <div class="content-wrapper">
        @yield('content')
    </div>

        <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>     