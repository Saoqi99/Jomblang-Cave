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
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .contents{
            margin-top:105px;
        }
    </style>
  </head>
  <body>
    <!-- Navbar Start -->
    <x-navbar></x-navbar>

    <div class="contents">

        <div class="d-flex justify-content-end">
            <a href="{{ asset('doc/safety_rider.pdf') }}" class="btn btn-primary" download="safety_rider.pdf">
                <i data-feather="download"></i> Download PDF
            </a>
        </div>

        <iframe src="{{ asset('doc/safety_rider.pdf') }}" width="100%" height="9000px">
            This browser does not support PDFs. Please download the PDF to view it: 
            <a href="{{ asset('doc/safety_rider.pdf') }}">Download PDF</a>.
        </iframe>
    </div>

    <script>
      feather.replace();
    </script>
    <!-- Javasript -->
    <script src="js\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>