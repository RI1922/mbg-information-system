<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'MBG Information System')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Inter',sans-serif;
            background:#F8FAFC;
            color:#0F172A;
            overflow-x:hidden;
        }

        .container-custom{
            width:100%;
            max-width:1280px;
            margin:auto;
            padding-left:24px;
            padding-right:24px;
        }

        .section-title{
            font-size:clamp(2rem,4vw,3rem);
            font-weight:800;
            line-height:1.2;
            color:#0F172A;
        }

        .section-subtitle{
            margin-top:16px;
            font-size:1rem;
            line-height:1.8;
            color:#64748B;
        }

    </style>

    @stack('styles')

</head>

<body class="bg-slate-50">

    @include('frontend.partials.navbar')

    {{-- Navbar tingginya sekitar 88px --}}
    <main class="pt-24">

        @yield('content')

    </main>

    @include('frontend.partials.footer')

    @stack('scripts')

</body>

</html>