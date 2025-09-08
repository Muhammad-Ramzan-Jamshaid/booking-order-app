
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
        <header>Register Now</header>
        <form method="POST" action="{{ route('section.store') }}">
            @csrf

            <input type="text" name="Username" required placeholder="Username">
          <input type="email" placeholder="Email address" required name="email" />
          <input type="password" placeholder="Password" required name="password" />
          <select name="gender" id=""  class="input100 ">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

          <div class="checkbox">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember">I read All the instruction carefully and providing accurate information</label>
          </div>

          <input type="submit" value="register" />

        
          </div>
        </form>
      </div>
    </section>

    <script src="{{ asset('assets/javascript.js') }}"></script>
  </body>
</html>
