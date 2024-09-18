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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .container{
            margin-top:15vh;
        }

        .gallery img {
            width: 100%;
            height: auto;
            object-fit: cover;
            cursor: pointer; /* Menambahkan cursor pointer untuk indikasi klik */
        }
        .gallery-item {
            position: relative;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gallery-overlay h5 {
            margin: 0;
        }
        /* CSS untuk gambar modal */
        .modal-dialog {
            max-width: 80vw; /* Atur lebar maksimal modal */
        }
        .modal-content {
            max-height: 80vh; /* Atur tinggi maksimal modal */
        }
        #modalImage {
            width: 150%; /* Memperbesar gambar 50% dari ukuran aslinya */
            height: auto;
            object-fit: contain; /* Menjaga aspek rasio gambar */
            display: block;
            margin: auto;
        }
    </style>

  </head>
  <body>
    <!-- Navbar Start -->
    <x-navbar></x-navbar>
    <!-- Navbar End -->

    <div class="container ">
        <h1 class="mb-4 text-center text-black fw-bold">Gallery</h1>
        <div class="row gallery">
            @foreach ($images as $image)
                <div class="col-md-4 mb-4 gallery-item">
                    <img src="{{ asset('images/' . basename($image)) }}" class="img-fluid" alt="Image" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-src="{{ asset('images/' . basename($image)) }}">
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid" alt="Modal Image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menangani event klik gambar untuk mengupdate sumber gambar modal
        document.addEventListener('DOMContentLoaded', function () {
            var imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget; // Button yang memicu modal
                var imageSrc = button.getAttribute('data-bs-src'); // Mendapatkan sumber gambar dari data attribute
                var modalImage = imageModal.querySelector('#modalImage');
                modalImage.src = imageSrc;
            });
        });
    </script>

    <script>
      feather.replace();
    </script>
    <!-- Javasript -->
    <script src="js\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>