<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <title>Restaurant Baldi</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'dancing': ['Dancing Script', 'cursive']
          }
        }
      }
    }
  </script>
</head>

<body class="font-poppins">
  <!-- Header -->
  <header class="fixed top-0 left-0 right-0 px-5 z-50 bg-white shadow-md">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-4">
        <a href="index.html" class="logo">
          <img src="img/klassy-logo.png" alt="Klassy Cafe Logo" class="h-12">
        </a>
        <nav>
          <ul class="flex space-x-6">
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="index.php">Home</a></li>
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="menu.php">Menu</a></li>
            <li class="cursor-pointer hover:text-amber-600 transition"><a href="contact.php">Contact Us</a></li>
            <li class="cursor-pointer" href="signIn.php"><a href="signIn.php">
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- Main Banner -->
  <div class="pt-24 bg-[url('img/reservation-bg.jpg')] bg-no-repeat bg-cover px-[15%]  h-[100%]">
    <div class="mx-auto p-4 py-20">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div class="text-center md:text-left">
          <h4 class="text-2xl  font-bold text-amber-600">KlassyCafe</h4>
          <h6 class="text-xl mb-4 text-white">THE BEST EXPERIENCE</h6>
          <h4 class="text-9xl font-bold text-amber-600">Dashboard</h4>
        </div>
      </div>
    </div>
  </div>

  <!--  Section -->



  <div class="relative overflow-x-auto m-7 shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right bg-amber-500">
      <thead class="text-base text-white uppercase bg-amber-500">
        <tr>
          <th scope="col" class="px-6 py-5">
            Client name
          </th>
          <th scope="col" class="text-center px-6 py-5">
            Date
          </th>
          <th scope="col" class="text-center px-6 py-5">
            Hour
          </th>
          <th scope="col" class="text-center px-6 py-5">
            Persone
          </th>
          <th scope="col" class="text-center px-6 py-5">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class=" bg-gray-50 border-b">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
            Ahmed lucas
          </th>
          <td class="text-center px-6 py-4">
            15/11/2025
          </td>
          <td class="text-center px-6 py-4">
            30:80
          </td>
          <td class="text-center px-6 py-4">
            2999
          </td>
          <td class="flex justify-center px-6 py-4 gap-2">
            <a href="#" class="font-medium text-white rounded-full px-1 bg-blue-600 hover:underline">Accepte</a>
            <a href="#" class="font-medium text-white rounded-full px-1 bg-red-600 hover:underline">Refuse</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>


  <!-- Footer -->
  <footer class="absolute bottom-0 left-0 w-full bg-gray-900 text-white py-8">
    <div class="mx-auto px-4">
      <div class="grid md:grid-cols-2">
        <div class="flex justify-center">
          <a href="index.html">
            <img src="img/white-logo.png" alt="Klassy Cafe Logo" class="h-12">
          </a>
        </div>
        <div class="text-center md:text-right">
          <p>© Copyright Klassy Cafe Co.</p>
          <p>Design: TemplateMo</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>