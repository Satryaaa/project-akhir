<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link href="css/build.css" rel="stylesheet">
</head>
<body>
    <nav class=" fixed top-0 z-20 w-full text-white bg-blue-400 shadow-2xl mx-auto">
      <div class="flex items-center justify-between max-w-screen-md container p-1 mx-auto">
        <div class="flex items-center">
              <img src="img/hero_1.jpg" alt="" class="mr-3 w-8 h-7 rounded-full">
            <h2 class="text-3xl font-playfair">PickSat</h2>
        </div>
        <div >

          <a href="/login" class="px-3"><b>LOGIN</b></a>

          <a href="/register" class="px-3"><b>REGISTER</b></a>
        </div>
    </div>
    </nav>


@yield('content')
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
