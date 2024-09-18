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
        <div class="navbar-nav">
          <a href={{ url('/dashboard') }}>Dashboard</a>
          <a href={{ url('/show_data') }}>Data Kuesioner</a>
          <a href={{ url('/show_matrix') }}>Data Matriks</a>
        </div>
    
        <div class="navbar-extend">
          <a href={{ url('admin/logout') }} id="logout"><i data-feather="log-out"></i></a>
          <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Table Start -->


    <div class="container1">
      <h1 class="fw-bold text-center  text-black rounded">Expert Data</h1>
      <div class="table-responsive" style="max-width: 1200px; margin: 0 auto;">
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Q1</th>
            <th scope="col">Q2</th>
            <th scope="col">Q3</th>
            <th scope="col">Q4</th>
            <th scope="col">Q5</th>
            <th scope="col">Q6</th>
            <th scope="col">Q7</th>
            <th scope="col">Q8</th>
            <th scope="col">Q9</th>
            <th scope="col">Q10</th>
            <th scope="col">Q11</th>
            <th scope="col">Q12</th>
            <th scope="col">Q13</th>
            <th scope="col">Q14</th>
            <th scope="col">Q15</th>
            <th scope="col">Q16</th>
            <th scope="col">Q17</th>
            <th scope="col">Q18</th>
            <th scope="col">Q19</th>
            <th scope="col">Q20</th>
            <th scope="col">Q21</th>
            <th scope="col">Q22</th>
            <th scope="col">Q23</th>
            <th scope="col">Q24</th>
            <th scope="col">Q25</th>
            <th scope="col">Q26</th>
            <th scope="col">Q27</th>
            <th scope="col">Q28</th>
            <th scope="col">Q29</th>
            <th scope="col">Q30</th>
            <th scope="col">Q31</th>
            <th scope="col">Q32</th>
            <th scope="col">Q33</th>
            <th scope="col">Q34</th>
            <th scope="col">Q35</th>
            <th scope="col">Q36</th>
            <th scope="col">Q37</th>
            <th scope="col">Q38</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($experts) && $experts->count() > 0)
          @foreach ($experts as $record)
          <tr>
            <th scope="row">{{ $record->id }}</th>
            <td>{{ $record->E1 }}</td>
            <td>{{ $record->E2 }}</td>
            <td>{{ $record->E3 }}</td>
            <td>{{ $record->E4 }}</td>
            <td>{{ $record->E5 }}</td>
            <td>{{ $record->E6 }}</td>
            <td>{{ $record->E7 }}</td>
            <td>{{ $record->E8 }}</td>
            <td>{{ $record->E9 }}</td>
            <td>{{ $record->E10 }}</td>
            <td>{{ $record->E11 }}</td>
            <td>{{ $record->E12 }}</td>
            <td>{{ $record->E13 }}</td>
            <td>{{ $record->E14 }}</td>
            <td>{{ $record->E15 }}</td>
            <td>{{ $record->E16 }}</td>
            <td>{{ $record->E17 }}</td>
            <td>{{ $record->E18 }}</td>
            <td>{{ $record->E19 }}</td>
            <td>{{ $record->E20 }}</td>
            <td>{{ $record->E21 }}</td>
            <td>{{ $record->E22 }}</td>
            <td>{{ $record->E23 }}</td>
            <td>{{ $record->E24 }}</td>
            <td>{{ $record->E25 }}</td>
            <td>{{ $record->E26 }}</td>
            <td>{{ $record->E27 }}</td>
            <td>{{ $record->E28 }}</td>
            <td>{{ $record->E29 }}</td>
            <td>{{ $record->E30 }}</td>
            <td>{{ $record->E31 }}</td>
            <td>{{ $record->E32 }}</td>
            <td>{{ $record->E33 }}</td>
            <td>{{ $record->E34 }}</td>
            <td>{{ $record->E35 }}</td>
            <td>{{ $record->E36 }}</td>
            <td>{{ $record->E37 }}</td>
            <td>{{ $record->E38 }}</td>
          </tr>
          @endforeach
          @else
            <p class="text-danger">No Expert Data Available</p>
        @endif
        </tbody>
      </table>
      </div>
    </div>

<!-- Data Wisatawan-->

    <div class="container2">
      <h1 class="fw-bold text-center text-black rounded mt-5">Tourist Data</h1>
      <div class="table-responsive" style="max-width: 1200px; margin: 0 auto;">
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Q1</th>
            <th scope="col">Q2</th>
            <th scope="col">Q3</th>
            <th scope="col">Q4</th>
            <th scope="col">Q5</th>
            <th scope="col">Q6</th>
            <th scope="col">Q7</th>
            <th scope="col">Q8</th>
            <th scope="col">Q9</th>
            <th scope="col">Q10</th>
            <th scope="col">Q11</th>
            <th scope="col">Q12</th>
            <th scope="col">Q13</th>
            <th scope="col">Q14</th>
            <th scope="col">Q15</th>
            <th scope="col">Q16</th>
            <th scope="col">Q17</th>
            <th scope="col">Q18</th>
            <th scope="col">Q19</th>
            <th scope="col">Q20</th>
            <th scope="col">Q21</th>
            <th scope="col">Q22</th>
            <th scope="col">Q23</th>
            <th scope="col">Q24</th>
            <th scope="col">Q25</th>
            <th scope="col">Q26</th>
            <th scope="col">Q27</th>
            <th scope="col">Q28</th>
            <th scope="col">Q29</th>
            <th scope="col">Q30</th>
            <th scope="col">Q31</th>
            <th scope="col">Q32</th>
            <th scope="col">Q33</th>
            <th scope="col">Q34</th>
            <th scope="col">Q35</th>
            <th scope="col">Q36</th>
            <th scope="col">Q37</th>
            <th scope="col">Q38</th>
          </tr>
        </thead>
        <tbody>
        @if(isset($data) && $data->count() > 0)
          @foreach ($data as $record)
          <tr>
            <th scope="row">{{ $record->id }}</th>
            <td>{{ $record->Q1 }}</td>
            <td>{{ $record->Q2 }}</td>
            <td>{{ $record->Q3 }}</td>
            <td>{{ $record->Q4 }}</td>
            <td>{{ $record->Q5 }}</td>
            <td>{{ $record->Q6 }}</td>
            <td>{{ $record->Q7 }}</td>
            <td>{{ $record->Q8 }}</td>
            <td>{{ $record->Q9 }}</td>
            <td>{{ $record->Q10 }}</td>
            <td>{{ $record->Q11 }}</td>
            <td>{{ $record->Q12 }}</td>
            <td>{{ $record->Q13 }}</td>
            <td>{{ $record->Q14 }}</td>
            <td>{{ $record->Q15 }}</td>
            <td>{{ $record->Q16 }}</td>
            <td>{{ $record->Q17 }}</td>
            <td>{{ $record->Q18 }}</td>
            <td>{{ $record->Q19 }}</td>
            <td>{{ $record->Q20 }}</td>
            <td>{{ $record->Q21 }}</td>
            <td>{{ $record->Q22 }}</td>
            <td>{{ $record->Q23 }}</td>
            <td>{{ $record->Q24 }}</td>
            <td>{{ $record->Q25 }}</td>
            <td>{{ $record->Q26 }}</td>
            <td>{{ $record->Q27 }}</td>
            <td>{{ $record->Q28 }}</td>
            <td>{{ $record->Q29 }}</td>
            <td>{{ $record->Q30 }}</td>
            <td>{{ $record->Q31 }}</td>
            <td>{{ $record->Q32 }}</td>
            <td>{{ $record->Q33 }}</td>
            <td>{{ $record->Q34 }}</td>
            <td>{{ $record->Q35 }}</td>
            <td>{{ $record->Q36 }}</td>
            <td>{{ $record->Q37 }}</td>
            <td>{{ $record->Q38 }}</td>
          </tr>
          @endforeach
          @else
          <p class="text-danger">No Tourist Data Available</p>
        @endif
        </tbody>
      </table>
      </div>
    </div>
    
    <br>
        <!-- Table End -->
        <footer style="background-color:#003121"class="footer mt-5 pt-5 pb-5">
          <div class="container text-center position-absolute top-100 start-50 translate-middle">
            <p class="position-absolute top-100 start-50 translate-middle">&copy; 2024  Jomblang Cave. All rights reserved.</p>
          </div>
      </footer>
    <!-- Feather Icons Init -->
    <script>
      feather.replace();
    </script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>