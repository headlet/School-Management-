<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href="{{asset('css/index.css')}}">
</head>

<body class="bg-[#377B9A]">

        @include('layout.public.common.navbar')
   
    <section>
        @yield('content');
    </section>
</body>

</html>