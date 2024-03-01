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
        <div>
          <button type="submit"
          class=" text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <a href="/login">Login</a></button>
          <button type="submit"
          class=" bg-gray-500 py-2 px-2 rounded-full text-white">
          <a href="/register">Register</a>
        </button>
        </div>
    </div>
    </nav>


@yield('content')
<script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
