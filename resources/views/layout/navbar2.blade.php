
<!doctype html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/build.css" rel="stylesheet">
  @stack('cssjsexternal')
</head>
<body>
  <nav class="top-0 z-20  bg bg-blue-400 shadow-md pt-6" >
    <div class="flex  justify-center h-10  gap-4">
        <div><a href="/album">
            ALBUM
        </div></a>
        <div><a href="/explore">
            EXPLORE
        </div></a>
        <form action="/explore" method="get">
            <input type="text" name="cari" id=""class="h-8 px-4 border rounded-full w-52" placeholder="search">
        </form>
        <div><a href="/pin">
            PIN
        </div></a>
        <div class="flex justify-end px-4">
            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="flex items-center justify-center " type="button">
              <img src="/img/hero_10.jpg" alt="" class="w-10 h-10 object-cover rounded-full relative bottom-2">
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton">
                <li>
                    <a href="/profil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                </li>
                <li>
                    <a href="/my-pin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil</a>
                </li>
                <li>
                    <a href="/" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                </li>
                </ul>
                     <a href="/changepassword" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ganti password</a>
                </li>
                <li>
            </div>
        </div>
        </div>
  </nav>

@yield('content2')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
@stack('footerjsexternal')
</html>
