<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.layout.head')
</head>
<body>
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">    
        <div class="login-card login-dark">
          <div>
            <div>
              <a class="logo" href="{{ route('admin.login') }}">
                <img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="loginpage">
                <img class="img-fluid for-light" src="../assets/images/logo/logo_dark.png" alt="loginpage">
              </a>
            </div>
            <div class="login-main"> 
              <form class="theme-form" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <h4>Sign in to account</h4>
                <p>Enter your email & password to login</p>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" required placeholder="">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required placeholder="*********">
                    <div class="show-hide"> <span class="show"></span></div>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checkbox1">Remember me</label>
                  </div>
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('backend.layout.footer')
  </div>
</body>
</html>
