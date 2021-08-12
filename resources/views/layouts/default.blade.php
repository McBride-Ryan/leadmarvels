<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Marvels</title>
    <!-- Tailwindcss is being pulled from resources/css/app.css -->
    <link rel="stylesheet" href="{{ asset('css/app.css' )}}">
</head>
<body class="bg-gray-100 text-black">
    <header class="fixed bg-white top-0 left-0 right-0 z-50 top-0 opacity-90">
        <div class="flex justify-between p-4">
            <img src="https://cdn.newswire.com/files/x/81/6d/a1303f0f6996d4b4e6ef65a0eab4.png" class="h-11 w-80">
            <nav class="mx-5 ">
                <a href="{{ route('home') }}" class="text-lg my-8 mx-2 text-black hover:text-red-800 transition">Home</a>
                <a href="{{ route('about') }}" class="text-lg my-8 mx-2 text-black hover:text-red-800 transition">About</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('page-content')
    </main>

    <footer class="w-full text-center text-white py-5 bg-indigo-900 left-0 right-0 bottom-0 z-50">
        <p>&copyCopyright 2021 Lead Marvels. All rights reserved.</p>
    </footer>
    
</body>
</html>