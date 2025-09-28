<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .wave {
            animation: wave 10s linear infinite;
            will-change: background-position;
        }

        .wave2 {
            animation: wave2 12s linear infinite;
            will-change: background-position;
        }

        @keyframes wave {
            from {
                background-position-x: 0;
            }

            to {
                background-position-x: 2000px;
            }
        }

        @keyframes wave2 {
            from {
                background-position-x: 0;
            }

            to {
                background-position-x: -2000px;
            }
        }

        .wave3{
            animation: wave3 16s linear infinite;
        }

        @keyframes wave3 {
            from {
                background-position-x: 0;
            }

            to {
                background-position-x: 2000px;
            }
            
        }
    </style>
</head>

<body class="bg-[#377B9A]">
    <nav>
        @include('layout.public.common.navbar')</nav>
    <section>
        @yield('content');</section>
</body>

</html>