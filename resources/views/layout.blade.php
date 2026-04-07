<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('partials._css')    
  <title>LaravelCRUD @yield('title')</title>
  <style type="text/css">
  .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 10px 0;
  }

  body {
    padding-bottom: 50px;
  }
</style>
</head>
<body>
  @include('partials._nav')

  <div class="content">@yield('content')</div>

  <div class="container-fluid footer">
    <h4 class="text-center">&copy; {{ date('Y')}}</h4>
  </div>

  @include('partials._js')

</body>
</html>