<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .spark-dot {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: sparkDot var(--dur, 2s) ease-in-out forwards;
            opacity: 0;
        }

        .spark-star {
            position: absolute;
            pointer-events: none;
            animation: sparkStar var(--dur, 2s) ease-in-out forwards;
            opacity: 0;
            font-style: normal;
        }

        @keyframes sparkDot {
            0% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }

            30% {
                opacity: 1;
                transform: scale(1) rotate(45deg);
            }

            80% {
                opacity: 0.7;
                transform: scale(0.8) rotate(120deg);
            }

            100% {
                opacity: 0;
                transform: scale(0) rotate(180deg);
            }
        }

        @keyframes sparkStar {
            0% {
                opacity: 0;
                transform: scale(0) translateY(0);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-5px);
            }

            70% {
                opacity: 0.5;
                transform: scale(0.8) translateY(-12px);
            }

            100% {
                opacity: 0;
                transform: scale(0) translateY(-20px);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="mx-auto container">
            {{ $slot }}
        </main>
    </div>
    @vite('resources/js/app.js')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
