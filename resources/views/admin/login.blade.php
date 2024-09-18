<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Goa-Jomblang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet"/>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
<style>
  .form{
    margin-top:5vh;
  }
  .alert{
    margin-top: 15vh;
  }
</style>  
  </head>

  <body>
    <!-- Navbar Start -->
    <x-navbar></x-navbar>
    <!-- Navbar End -->
    
    <!--Login area -->
    <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    <form class="form position-absolute top-50 start-50 translate-middle" action={{ url('/create_login') }} method="post">
      @csrf
        <div class="bg-secondary p-5 rounded bg-opacity-75">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ Session::get('email')}}" name="email" id="email" placeholder="Email">
            
            @error('email')
                    <span class="text-danger">{{ $message }} </span>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            
            @error('password')
              <span class="text-danger">{{ $message }} </span>
            @enderror
          </div>
          <div class="d-felx align-items-center justify-content-between mbt-4 mb-0">
            <span>
              <a class="small" href={{url('home')}}>Home</a>
            </span>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3 mb-5 pt-3 pb-5">
            <button id="submit" type="submit" class="btn px-5 btn-success">Log In</button>
        </div>
      </form>
    </div>

<footer style="background-color:#003121" class="footer position-absolute bottom-0 start-50 translate-middle-x mt-5 pt-5 pb-5">
</footer>
    <script>
      feather.replace();
    </script>
    <!-- Javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js\script.js"></script>
    </body>
</html>


