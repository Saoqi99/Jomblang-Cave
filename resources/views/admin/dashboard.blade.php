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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .container1{
        margin-top:15vh;
      }
    </style>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="./img/logo.png" />
    
        <div class="navbar-extend">
          <a href={{ url('admin/logout') }} id="logout"><i data-feather="log-out"></i></a>
          <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="fw-bold text-center text-black">Anda Berhasil Login</h1>
        <h2 class="text-black text-center">Silahkan pilih menu dibawah </h2>
        <div class="d-flex justify-content-center my-5">
            <a href={{ url('/show_data') }} class="btn btn-success mx-5">Data Kuesioner</a>
            <a href={{ url('/show_matrix') }} class="btn btn-success mx-5">Matriks Kuesioner</a>
        </div>
    </div>


    
        
    
<script>
    feather.replace();
  </script>
  <!-- Javasript -->
  <script src="js\script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
