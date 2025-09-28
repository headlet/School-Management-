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

        .wave3 {
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

        /* Animate the background div up and down */
        @keyframes bg-float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            /* smaller movement */
            100% {
                transform: translateY(0px);
            }
        }

        .animate-bg-float {
            animation: bg-float 6s ease-in-out infinite;
            will-change: transform;
        }

        /* Animate the img up and down */
        @keyframes img-float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            /* bigger movement for foreground */
            100% {
                transform: translateY(0px);
            }
        }

        .animate-img-float {
            animation: img-float 4s ease-in-out infinite;
            will-change: transform;
        }

        .anim{
    opacity: 0; 
    transform: translateY(30px);
    animation: moveup 0.5s linear forwards;
}

@keyframes moveup {
    100%{
        opacity: 1;
        transform: translateY(0px);
    }
}

#ptext{
   animation-delay: 0.5s; 
}
#ianim{
   animation-delay: 1s; 
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