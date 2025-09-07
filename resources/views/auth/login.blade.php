<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content=" Today in this blog you will learn how to create a responsive Login & Registration Form in HTML CSS & JavaScript." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login & Signup Form | CodingNepal</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="{{ asset('assets/custom-scripts.js') }}" defer></script>
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Login</header>
        <form method="POST" action="{{ route('login') }}">
            @csrf

          <input type="email" placeholder="Email address" required name="email" />
          <input type="password" placeholder="Password" required name="password" />

          <div class="checkbox">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember">Remember me</label>
          </div>

          <input type="submit" value="Login" />

          <div class="text-center p-t-12">
            <span class="txt1">
              @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
                </a>
              @endif
            </span>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="{{ route('register') }}">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </section>

    <script src="{{ asset('assets/javascript.js') }}"></script>
  </body>
</html>
