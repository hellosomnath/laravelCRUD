<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials._css')
    <title>Login</title>
</head>
<body>
  @include('partials._nav')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3 card mt-5 py-3 px-4">
                <form action="{{ url('authenticate') }}" method="post">
                  @csrf
                    <h4 class="mb-3 text-center">Login</h4><hr>
                    <div class="form-group mb-4">
                      <label class="form-label">Email<em class="text-danger">*</em></label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                      @error('email')
                    <em class="text-danger">{{ $message }}</em>
                    @enderror
                    </div>
                    <div class="form-group mb-4">
                      <label class="form-label">Password<em class="text-danger">*</em></label>
                      <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                      @error('password')
                    <em class="text-danger">{{ $message }}</em>
                    @enderror
                    </div>
                    <p class="fwt-lighter">Not yet registerd? <a href="{{ url('register') }}" class="text-decoration-none">Register Here</a></p>
                    <button class="btn btn-success w-100 py-2" type="submit">
                      Submit
                    </button>
                  </form>
            </div>
            <p class="text-center mt-2"><a href="{{url('/')}}" class="text-decoration-none text-dark fw-bold"><i class="fa fa-home"></i> Home</a></p>
        </div>
    </div>

    <div class="container-fluid footer">
      <h4 class="text-center">&copy; {{ date('Y')}}</h4>
    </div>

    @include('partials._js')
</body>
</html>