<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Advice</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
  <ul class="flex items-center">
  <li>
  <a href="#" class="p-3">Home</a>
  </li>
  <li>
  <a href="#" class="p-3">Dashboard</a>
  </li>
  <li>
  <a href="#" class="p-3">Post</a>
  </li>
  </ul>
 
  <ul class="flex items-center">
  <li>
  <a href="#" class="p-3">James</a>
  </li>
  <li>
  <a href="#" class="p-3">Login</a>
  </li>
  <li>
  <a href="#" class="p-3">Register</a>
  </li>
  <li>
  <a href="#" class="p-3">Logout</a>
  </li>
  </ul>
  
  </nav>
  @yield('content')
</body>
</html>
