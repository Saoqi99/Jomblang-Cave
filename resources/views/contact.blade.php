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
    <link rel="stylesheet" href="css/style.css"/>
 
    <style>
        .contact-icon {
          margin-right: 10px;
        }
        .container{
          padding-top: 15vh;
          color: black;
        }
        .container h1{
          color: black;
          display:flex;
          align-items: center;
          justify-content: center;
        }
        .container .card{
          margin-top:5vh;

        }
        .card{
          min-width: 480px;
          min-height: 360px;
        }
        .footer{
          margin-top:50vh;
          background-color: #003121;
          max-height: 100px;
          color: white;
        }
        .contact-icon a{
          margin-left: 5vh;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
  </head>
  <body>

      <!-- Navbar -->
      <x-navbar></x-navbar>
        
        <!-- Page Title -->
        <div class="container mt-4 position-relative">
            <h1 class="text-center fw-bold">CONTACT US</h1>
        </div>
        
        <!-- Contact Us Section -->
        <div class="container mt-5">
          <div class="row position-absolute top-50 start-50 translate-middle">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title text-center fw-bold text-black">Get in Touch</h5>
                          <p class="card-text mt-5">
                              <div class="d-flex justify-content-start mt-3 mb-5">
                                  <i class="contact-icon" data-feather="phone"></i>
                                  <a class="ps-3" href="https://wa.me/+62818629901" target="_blank">+62818629901</a>
                              </div>
                              <div class="d-flex justify-content-start mt-3 mb-5">
                                  <i class="contact-icon " data-feather="mail"></i>
                                  <a class="ps-3" href="mailto:jomblangbook@gmail.com">jomblangbook@gmail.com</a>
                              </div>
                              <div class="d-flex justify-content-start mt-3 mb-5">
                                  <i class="contact-icon " data-feather="instagram"></i>
                                  <a class="ps-3" href="https://instagram.com/goa.jomblang/" target="_blank">@goa.jomblang</a>
                              </div>
                              <div class="d-flex justify-content-start mt-3 mb-5">
                                  <i class="contact-icon " data-feather="facebook"></i>
                                  <a class="ps-3" href="https://facebook.com/yourprofile" target="_blank">Facebook Page</a>
                              </div>
                          </p>
                          <div class="d-grid gap-2">
                              <a href={{ url('/sop') }} class="btn btn-primary mt-3">Preparation</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


        <!-- Footer Section -->
        <footer style="background-color:#003121" class="footer">
            <p class="text-center pb-5 pt-5 mb-0">&copy; 2024 Jomblang Cave. All rights reserved.</p>
        </footer>
        <script>
          feather.replace();
        </script>
        <!-- Font Awesome for icons -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js\script.js"></script>
  </body>

</html>
