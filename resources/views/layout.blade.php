<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials._css')    
    <title>LaravelCRUD @yield('title')</title>
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