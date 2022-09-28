<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Friends</title>
    <!-- CDN DEV ONLY TEMP -->
    <!-- Temporary Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Temporary Tailwind CDN-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyanprocess: '#5BC0EB',
                        minionyellow: '#FDE74C',
                        androidgreen: '#9BC53D',
                        flame: '#E55934',
                        pumpkin: '#FA7921'
                    },
                    backgroundImage: {
                        hero: "",
                    },
                    fontFamily: {
                        main: ['Anybody', 'arial'],
                        title: ['Fredoka One', 'arial']
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anybody:ital@0;1&family=Fredoka+One&display=swap');
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <!--Header-->
    <header
        class="px-5 sm:px-10 md:px-20 lg:px-40 py-5 bg-gradient-to-t from-white to-minionyellow flex sm:flex-row flex-col justify-between items-center">
        <h1 class="text-5xl font-main"><a href="/">Cool Friends</a></h1>
        <nav>
            <ul class="flex gap-4 justify-end font-main">
                <li><i class="fa-solid fa-signs-post"></i> <a class="hover:underline" href="/posts">Posts</a></li>
                <li><i class="fa-solid fa-right-to-bracket"></i> <a class="hover:underline" href="/login">Login</a></li>
                <li><i class="fa-regular fa-clipboard"></i> <a class="hover:underline" href="/register">Register</a></li>
            </ul>
        </nav>
    </header>
    <!--Main-->
    <main class="px-5 sm:px-10 md:px-20 lg:px-40 py-5 font-main">
        {{$slot}}
    </main>
    <!--Footer-->
    <footer
        class="mt-auto px-5 sm:px-10 md:px-20 lg:px-40 py-5 bg-gradient-to-b from-white to-minionyellow sm:flex justify-between items-center font-main">
        <div class="sm:text-left text-center">
            <p>2022 Cool Friends Company <i class="fa-solid fa-trademark"></i></p>
            <p>Houston, Texas | Burwell Heights Road</p>
        </div>
        <ul class="flex gap-4 mt-4 sm:flex-row sm:justify-end flex-row justify-center">
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
        </ul>
        <ul class="flex gap-4 mt-4 sm:flex-row sm:justify-end flex-row justify-center">
            <li>About</li>
            <li>Terms</li>
            <li>Info</li>
        </ul>
    </footer>
</body>

</html>