<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"> </script>
  <title>Form Crud</title>
</head>
<body>
  <div class="main-div mt-5">
     @yield('contant')
  </div>
  
  @yield('script')
</body>
</html>