<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Workopia | Find or List a Job')</title>
 <script src="https://cdn.tailwindcss.com"></script>

  </head>

  <body class="bg-gray-100">
    <x-header />
    <main class="container mx-auto p-4 mt-4">@yield('content')</main>
    <x-inputs.text />
  </body>
</html>