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
      .container1 {
        margin-top: 5vh;
      }
      .content {
        margin-top: 15vh;
      }

      #message {
        text-align: center; 
        margin-top: 20px; 
        font-size: 18px; 
        font-weight: bold;

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
<!-- -->

    <div class="content">
    <h1 class="fw-bold text-center  text-black rounded">Perhitungan MGAM</h1>
    </div>

    <div class="container">
      <div class="card message-card border-radius">
        <div class="card-body">
          <div>
            <p class="text-justify fs-5">Sebelum melakukan penilaian M-GAM, langkah awal yang perlu dilakukan adalah 
              melakukan penilaian Geosite Assesment Model (GAM). Penilaian GAM akan mempertimbangkan 
              nilai-nilai yang diberikan oleh pakar ahli serta pentingnya setiap sub-indikator. 
              Penilaian GAM akan menjadi M-GAM ketika opini wisatawan dimasukan pada penilaian 
              (Milenković et al., 2020). Terdapat tujuh nilai yang digunakan dalam perhitungan
               M-GAM diantaranya sebagai berikut:</p>
            <ul class="fs-5">
                <li>Main Value (MV)</li>
                  <ul>Scientific/Educational Value (VSE)</ul>
                  <ul>Aesthetic Value (VSA)</ul>
                  <ul>Protection Value (VPr)</ul>
                <li>Added Value (AV)</li>
                  <ul>Functional Value (VFn)</ul>
                  <ul>Tourist Value (VTr)</ul>
                  <ul>Safety Value (VSf)</ul>
                  <ul>Enjoyable Value (VEj)</ul>
            </ul>
            <p class="fs-5">untuk mencari nilai MV dan AV adalah dengan cara sebagai berikut</p>
            <p class="fs-5">
              MV=VSE+VSA+VPr<br>
              AV=VFn+VTr+VSf+VEj
            </p>      
          </div>
        </div>
      </div>
    </div> 

    <div class="container1"> 
      <div class="table-responsive" style="max-width: 1200px; margin: 0 auto;">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center" rowspan="2" scope="col">Nilai</th>
                    <th class="text-center" colspan="4" scope="col">VSE</th>
                    <th class="text-center" colspan="4" scope=" col">VSA</th>
                    <th class="text-center" colspan="4" scope="col">VPr</th>
                    <th class="text-center" colspan="6" scope="col">VFn</th>
                    <th class="text-center" colspan="6" scope="col">VTr</th>
                    <th class="text-center" colspan="7" scope="col">VSf</th>
                    <th class="text-center" colspan="7" scope="col">VEj</th>
                </tr>
                <tr>
                    @for ($i = 1; $i <= 38; $i++)
                        <th class="text-center" >{{ $i }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
              @if(isset($averages) && count($averages) > 0)
              <tr>
                  <td class="fw-bold">Pakar</td>
                  @for ($i = 1; $i <= 38; $i++)
                      <td>{{ $averages['Q'.$i] }}</td>
                  @endfor
              </tr>

              <tr>
                  <td class="fw-bold">Wisatawan</td>
                  @for ($i = 1; $i <= 38; $i++)
                      <td>{{ $averages['E'.$i] }}</td>
                  @endfor
              </tr>

                <tr>
                  <td class="fw-bold">Total Value</td>
                  @for ($i = 1; $i <= 38; $i++)
                      <td>{{ $averages['T'.$i] }}</td>
                  @endfor
                </tr>
                @else
                <tr>
                    <td colspan="39" class="text-danger text-center">No Average Data Available</td>
                </tr>
              @endif  
            </tbody>
        </table>
      </div>
    </div>

    <div class="container2 mt-5">
      <div class="table-responsive d-flex justify-content-between" style="max-width: 1200px; margin: 0 auto;">
        <table class="table table-striped table-bordered">
          <thead class="table-dark">
            <th>SubMainValue</th>
            <th>Value</th>
            <th>Value Max</th>
          </thead>
          {{-- Tabel Main Value --}}
          <tbody class="mx-5">
            <tr>
              <td>VSE</td>
              <td>{{ $VSE ?? 'N/A' }}</td>
              <td>4</td>
            </tr>

            <tr>
              <td>VSA</td>
              <td>{{ $VSA ?? 'N/A' }}</td>
              <td>4</td>
            </tr>

            <tr>
            <td>VPr</td>
            <td>{{ $VPr ?? 'N/A' }}</td>
            <td>4</td>
            </tr>
            
            <tr>
              <td class="table-dark">Main Value</td>
              <td colspan="2">{{ $MV }}</td>
            </tr>
          </tbody>
        </table>
          {{-- Tabel Added Value --}}
        <table class="table table-striped table-bordered">
          <thead class="table-dark">
            <th>SubAddedValue</th>
            <th>Value</th>
            <th>Value Max</th>
          </thead>
          <tbody>
            <tr>
              <td>VFn</td>
              <td>{{ $VFn ?? 'N/A' }}</td>
              <td>6</td>
            </tr>

            <tr>
              <td>VTr</td>
              <td>{{ $VTr ?? 'N/A' }}</td>
              <td>6</td>
            </tr>

            <tr>
            <td>VSf</td>
            <td>{{ $VSf ?? 'N/A' }}</td>
            <td>7</td>
            </tr>
            
            <tr>
            <td>VEj</td>
            <td>{{ $VEj ?? 'N/A' }}</td>
            <td>7</td>
            </tr>
            
            <tr>
              <td class="table-dark">Added Value</td>
              <td colspan="2">{{ $AV }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="mb-2 mt-5">
      <div class="d-flex justify-content-evenly">
  
        <div class="bg-gradient">
          <div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;">
            <div class="bg-white" style="width: 600px; height: 300px;">
                <canvas id="matrixChart1" width="400" height="200"></canvas>
            </div>
          </div>
        </div> 

        <div class="bg-gradient">
          <div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;">
            <div class="bg-white" style="width: 600px; height: 300px;">
                <canvas id="matrixChart2" width="400" height="200"></canvas>
            </div>
          </div>
        </div> 
  
      </div>
    </div>

    
    <div class="d-flex justify-content-center align-items-center" style="min-height: 60vh;">
      <div class="bg-white" style="width: 1000px; height: 500px;">
          <canvas id="matrixChart"></canvas>
      </div>
  </div>



  <div class="d-flex justify-content-center align-items-center mt-5 mb-1">
    <div class="card message-card border-radius px-5 py-1">
  <ul>
    <li><span class="fw-bold">Z11</span> berada di zona X 0-4 dan Y 0-9  </li>
    <li><span class="fw-bold">Z12</span> berada di zona X 0-4 dan Y 9-18  </li>
    <li><span class="fw-bold">Z13</span> berada di zona X 0-4 dan Y 18-34  </li>
  </ul>
    </div>

    <div class="card message-card border-radius px-5 py-1">
      <ul>
        <li><span class="fw-bold">Z21</span>  berada di zona X 4-8 dan Y 0-9  </li>
        <li><span class="fw-bold">Z22</span>  berada di zona X 4-8 dan Y 9-18  </li>
        <li><span class="fw-bold">Z23</span>  berada di zona X 4-8 dan Y 18-34  </li>
      </ul>
    </div>

    <div class="card message-card border-radius px-5 py-1">
      <ul>
        <li><span class="fw-bold">Z31</span>  berada di zona X 8-12 dan Y 0-9  </li>
        <li><span class="fw-bold">Z32</span>  berada di zona X 8-12 dan Y 9-18  </li>
        <li><span class="fw-bold">Z33</span>  berada di zona X 8-12 dan Y 18-34  </li>
      </ul>
    </div>
  </div>
  

  <div class="container">
    <div class="card message-card border-radius">
      <div class="card-body">
        <div id="message"></div>
      </div>
    </div>
  </div>
 
  <!--Hasil MGAM dan Evaluasi-->
  <div class="mb-2 mt-5">
    <div class="d-flex justify-content-evenly">

      <div class="bg-secondary bg-gradient rounded p-2">
        <h2>Hasil Perhitungan M-GAM</h2>
      </div> 
      <div class="bg-secondary bg-gradient rounded p-2">
        <h2>Tindakan Evaluasi</h2>
      </div> 

    </div>
  </div>
      {{-- Kolom Evaluasi --}}
      <div class="container mt-5">
        <div class="row">
            <!-- Kolom atas kiri -->
            <div class="col-md-6 mb-4">
                <div class=" border-radius p-3">
                    <div class="card-body">
                        <!-- Bagian pertama dari messages2 -->
                        @foreach ($messages2 as $type => $message2)
                            @if ($loop->index < count($messages2) / 2)
                                <div class="alert alert-warning">
                                    {{ $message2 }}
                                </div>
                            @endif
                        @endforeach
  
                        <!-- Pisah dengan garis atau elemen lainnya -->
                        <hr>
  
                        <!-- Bagian kedua dari messages2 -->
                        @foreach ($messages2 as $type => $message2)
                            @if ($loop->index >= count($messages2) / 2)
                                <div class="alert alert-warning">
                                    {{ $message2 }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Kolom bawah kiri -->
            <div class="col-md-6 mb-4">
                <div class=" border-radius p-3">
                    <div class="card-body">
 
                        @foreach ($messages as $key => $message)
                            @if (str_contains($key, 'T') && $key <= 'T12')
                                <div class="alert alert-info">
                                    {{ $message }}
                                </div>
                            @endif
                        @endforeach

                        @foreach ($messages as $key => $message)
                        @if (str_contains($key, 'T') && $key >= 'T13')
                            <div class="alert alert-info">
                                {{ $message }}
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <footer style="background-color:#003121"class="footer mt-5 pt-5 pb-5">
    <div class="text-center">
      <p class="">&copy; 2024  Jomblang Cave. All rights reserved.</p>
    </div>
</footer>

<!-- Chart.js dan plugin annotation -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.0.2"></script>


<script>
 document.addEventListener('DOMContentLoaded', function () {
    const ctx1 = document.getElementById('matrixChart1').getContext('2d');

    // Data untuk chart pertama
    const yValues1 = [{{ $imVSE }}, {{ $imVSA }}, {{ $imVPr }}];
    const xValues1 = [{{ $GVSE }}, {{ $GVSA }}, {{ $GVPr }}];
    const labels1 = ['VSE', 'VSA', 'VPr'];

    new Chart(ctx1, {
        type: 'scatter',
        data: {
            datasets: [
                {
                    label: 'VSE',  // Label untuk titik pertama
                    data: [{ x: xValues1[0], y: yValues1[0] }],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                },
                {
                    label: 'VSA',  // Label untuk titik kedua
                    data: [{ x: xValues1[1], y: yValues1[1] }],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                },
                {
                    label: 'VPr',  // Label untuk titik ketiga
                    data: [{ x: xValues1[2], y: yValues1[2] }],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                }
            ]
        },
        options: {
            scales: {
                x: {
                    type: 'linear',
                    min: 0,
                    max: 4,
                    title: {
                        display: true,
                        text: 'Performance Value'
                    },
                    ticks: {
                        stepSize: 1
                    }
                },
                y: {
                    type: 'linear',
                    min: 0,
                    max: 4,
                    title: {
                        display: true,
                        text: 'Importance'
                    },
                    ticks: {
                        stepSize: 1
                    }
                }
            },
            plugins: {
              title: {
                display: true,
                text: 'Importance-Performance Matrix MV',
                font: {
                    size: 18 // Ukuran font judul
                },
                padding: {
                    top: 10,
                    bottom: 30
                }
            },
                annotation: {
                    annotations: {
                        line1: {
                            type: 'line',
                            scaleID: 'x',
                            value: 2,  // Garis vertikal pada sumbu X
                            borderColor: 'black',
                            borderWidth: 2
                        },
                        line2: {
                            type: 'line',
                            scaleID: 'y',
                            value: 2,  // Garis horizontal pada sumbu Y
                            borderColor: 'black',
                            borderWidth: 2
                        }
                    }
                },
                datalabels: {
                    align: 'right',
                    anchor: 'end',
                    formatter: function(value, context) {
                        return `(${value.x}, ${value.y})`; // Tampilkan koordinat
                    }
                }
            }
        },
        plugins: [
            {
                id: 'watermark',
                beforeDraw: function(chart) {
                    const ctx = chart.ctx;
                    const chartArea = chart.chartArea;
                    const xScale = chart.scales.x;
                    const yScale = chart.scales.y;

                    // Konversi nilai X dan Y ke posisi pixel
                    const xPosition1 = xScale.getPixelForValue(1); 
                    const yPosition1 = yScale.getPixelForValue(1.5);

                    const xPosition2 = xScale.getPixelForValue(1); 
                    const yPosition2 = yScale.getPixelForValue(3.5); 

                    const xPosition3 = xScale.getPixelForValue(3); 
                    const yPosition3 = yScale.getPixelForValue(1.5); 

                    const xPosition4 = xScale.getPixelForValue(3); 
                    const yPosition4 = yScale.getPixelForValue(3.5); 

                    ctx.save();
                    ctx.font = "15px Arial";
                    ctx.fillStyle = 'rgba(0, 0, 0, 0.3)';  // Warna watermark dengan transparansi
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText('Q3', xPosition1, yPosition1);
                    ctx.fillText('Low Priority', xPosition1, yPosition1+20);
                    ctx.fillText('Low Importance', xPosition1, yPosition1+35);
                    ctx.fillText('Low Performance', xPosition1, yPosition1+50);

                    ctx.fillText('Q1', xPosition2, yPosition2);
                    ctx.fillText('Concentrate Here', xPosition2, yPosition2+20);
                    ctx.fillText('High Importance', xPosition2, yPosition2+35);
                    ctx.fillText('Low Performance', xPosition2, yPosition2+50);

                    ctx.fillText('Q4', xPosition3, yPosition3);
                    ctx.fillText('Possible Overkill', xPosition3, yPosition3+20);
                    ctx.fillText('Low Importance', xPosition3, yPosition3+35);
                    ctx.fillText('High Performance', xPosition3, yPosition3+50);

                    ctx.fillText('Q2', xPosition4, yPosition4);
                    ctx.fillText('Keep Up The Good Work', xPosition4, yPosition4+20);
                    ctx.fillText('High Importance', xPosition4, yPosition4+35);
                    ctx.fillText('High Performance', xPosition4, yPosition4+50);


                    ctx.restore();
                }
            }
        ]
    });
  
      // Chart Kedua
   
    const ctx2 = document.getElementById('matrixChart2').getContext('2d');

    // Data untuk chart kedua
    const yValues2 = [{{ $imVFn }}, {{ $imVTr }}, {{ $imVSf }}, {{ $imVEj }}];
    const xValues2 = [{{ $GVFn }}, {{ $GVTr }}, {{ $GVSf }}, {{ $GVEj }}];
    const labels2 = ['VFn', 'VTr', 'VSf', 'VEj'];

    new Chart(ctx2, {
        type: 'scatter',
        data: {
            datasets: [
                {
                    label: 'VFn',  // Label untuk titik pertama
                    data: [{ x: xValues2[0], y: yValues2[0] }],
                    backgroundColor: 'rgba(153, 102, 255, 0.6)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                },
                {
                    label: 'VTr',  // Label untuk titik kedua
                    data: [{ x: xValues2[1], y: yValues2[1] }],
                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                },
                {
                    label: 'VSf',  // Label untuk titik ketiga
                    data: [{ x: xValues2[2], y: yValues2[2] }],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                },
                {
                    label: 'VEj',  // Label untuk titik keempat
                    data: [{ x: xValues2[3], y: yValues2[3] }],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointRadius: 5,
                    borderWidth: 2
                }
            ]
        },
        options: {
            scales: {
                x: {
                    type: 'linear',
                    min: 0,
                    max: 6,
                    title: {
                        display: true,
                        text: 'Performance Value'
                    }
                },
                y: {
                    type: 'linear',
                    min: 0,
                    max: 6,
                    title: {
                        display: true,
                        text: 'Importance'
                    },
                    ticks: {
                        stepSize: 1
                    }
                }
            },
            plugins: {
              title: {
                display: true,
                text: 'Importance-Performance Matrix AV',
                font: {
                    size: 18 // Ukuran font judul
                },
                padding: {
                    top: 10,
                    bottom: 30
                }
            },
                annotation: {
                    annotations: {
                        line1: {
                            type: 'line',
                            scaleID: 'x',
                            value: 3,  // Garis vertikal pada sumbu X
                            borderColor: 'black',
                            borderWidth: 2
                        },
                        line2: {
                            type: 'line',
                            scaleID: 'y',
                            value: 3,  // Garis horizontal pada sumbu Y
                            borderColor: 'black',
                            borderWidth: 2
                        }
                    }
                },
                datalabels: {
                    align: 'right',
                    anchor: 'end',
                    formatter: function(value, context) {
                        return `(${value.x}, ${value.y})`; // Tampilkan koordinat
                    }
                }
            }
        },
        plugins: [
            {
                id: 'watermark',
                beforeDraw: function(chart) {
                    const ctx = chart.ctx;
                    const chartArea = chart.chartArea;
                    const xScale = chart.scales.x;
                    const yScale = chart.scales.y;

                    // Konversi nilai X dan Y ke posisi pixel
                    const xPosition1 = xScale.getPixelForValue(1.5); 
                    const yPosition1 = yScale.getPixelForValue(2.5);

                    const xPosition2 = xScale.getPixelForValue(1.5); 
                    const yPosition2 = yScale.getPixelForValue(5.5); 

                    const xPosition3 = xScale.getPixelForValue(4.5); 
                    const yPosition3 = yScale.getPixelForValue(2.5); 

                    const xPosition4 = xScale.getPixelForValue(4.5); 
                    const yPosition4 = yScale.getPixelForValue(5.5); 

                    ctx.save();
                    ctx.font = "15px Arial";
                    ctx.fillStyle = 'rgba(0, 0, 0, 0.3)';  // Warna watermark dengan transparansi
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText('Q3', xPosition1, yPosition1);
                    ctx.fillText('Low Priority', xPosition1, yPosition1+20);
                    ctx.fillText('Low Importance', xPosition1, yPosition1+35);
                    ctx.fillText('Low Performance', xPosition1, yPosition1+50);

                    ctx.fillText('Q1', xPosition2, yPosition2);
                    ctx.fillText('Concentrate Here', xPosition2, yPosition2+20);
                    ctx.fillText('High Importance', xPosition2, yPosition2+35);
                    ctx.fillText('Low Performance', xPosition2, yPosition2+50);

                    ctx.fillText('Q4', xPosition3, yPosition3);
                    ctx.fillText('Possible Overkill', xPosition3, yPosition3+20);
                    ctx.fillText('Low Importance', xPosition3, yPosition3+35);
                    ctx.fillText('High Performance', xPosition3, yPosition3+50);

                    ctx.fillText('Q2', xPosition4, yPosition4);
                    ctx.fillText('Keep Up The Good Work', xPosition4, yPosition4+20);
                    ctx.fillText('High Importance', xPosition4, yPosition4+35);
                    ctx.fillText('High Performance', xPosition4, yPosition4+50);

                    ctx.restore();
                }
            }
        ]
    });


      // Chart Ketiga (Zona dan Pesan)
      const ctx = document.getElementById('matrixChart').getContext('2d');
      const xValue = {{ $MV }};
      const yValue = {{ $AV }};
  
      // Menentukan zona dan pesan
      let zoneMessage = '';
  
      if (xValue <= 4) {
          if (yValue <= 9) {
              zoneMessage = 'Masuk zona Z11. Dari perhitungan MGAM didapatkan nilai rata-rata MV rendah dan AV yang rendah.';
          } else if (yValue <= 18) {
              zoneMessage = 'Masuk zona Z12. Dari perhitungan MGAM didapatkan nilai rata-rata MV rendah dan AV yang sedang.';
          } else {
              zoneMessage = 'Masuk zona Z13. Dari perhitungan MGAM didapatkan nilai rata-rata MV rendah dan AV yang tinggi.';
          }
      } else if (xValue <= 8) {
          if (yValue <= 9) {
              zoneMessage = 'Masuk zona Z21. Dari perhitungan MGAM didapatkan nilai rata-rata MV sedang dan AV yang rendah.';
          } else if (yValue <= 18) {
              zoneMessage = 'Masuk zona Z22. Dari perhitungan MGAM didapatkan nilai rata-rata MV sedang dan AV yang sedang.';
          } else {
              zoneMessage = 'Masuk zona Z23. Dari perhitungan MGAM didapatkan nilai rata-rata MV sedang dan AV yang tinggi.';
          }
      } else if (xValue <= 12) {
          if (yValue <= 9) {
              zoneMessage = 'Masuk zona Z31. Dari perhitungan MGAM didapatkan nilai rata-rata MV tinggi dan AV yang rendah.';
          } else if (yValue <= 18) {
              zoneMessage = 'Masuk zona Z32. Dari perhitungan MGAM didapatkan nilai rata-rata MV tinggi dan AV yang sedang.';
          } else {
              zoneMessage = 'Masuk zona Z33. Dari perhitungan MGAM didapatkan nilai rata-rata MV tinggi dan AV yang tinggi.';
          }
      } else {
          zoneMessage = 'Nilai di luar zona yang ditentukan.';
      }
  
      // Menampilkan pesan
      document.getElementById('message').innerText = zoneMessage;
  
      // Menggambar grafik ketiga (Grafik MV & AV)
      new Chart(ctx, {
          type: 'scatter',
          data: {
              datasets: [{
                  label: 'Matrix Data',
                  data: [{
                      x: xValue,
                      y: yValue
                  }],
                  backgroundColor: 'rgba(75, 192, 192, 0.6)',
                  pointRadius: 10
              }]
          },
          options: {
              scales: {
                  x: {
                      type: 'linear',
                      min: 0,
                      max: 12,
                      title: {
                          display: true,
                          text: 'Main Value (MV)'
                      }
                  },
                  y: {
                      type: 'linear',
                      min: 0,
                      max: 26,
                      title: {
                          display: true,
                          text: 'Additional Value (AV)'
                      },
                      ticks: {
                          stepSize: 1
                      }
                  }
              },
              plugins: {
                  title: {
                      display: true,
                      text: 'Z-Index MGAM',
                      font: {
                          size: 18 // Ukuran font judul
                      },
                      padding: {
                          top: 10,
                          bottom: 30
                      }
                  },
                  annotation: {
                      annotations: {
                          line1: {
                              type: 'line',
                              scaleID: 'x',
                              value: 4,
                              borderColor: 'black',
                              borderWidth: 2
                          },
                          line2: {
                              type: 'line',
                              scaleID: 'x',
                              value: 8,
                              borderColor: 'black',
                              borderWidth: 2
                          },
                          line3: {
                              type: 'line',
                              scaleID: 'y',
                              value: 9,
                              borderColor: 'black',
                              borderWidth: 2
                          },
                          line4: {
                              type: 'line',
                              scaleID: 'y',
                              value: 18,
                              borderColor: 'black',
                              borderWidth: 2
                          }
                      }
                  }
              }
          },
        plugins: [
            {
                id: 'watermark',
                beforeDraw: function(chart) {
                    const ctx = chart.ctx;
                    const chartArea = chart.chartArea;
                    const xScale = chart.scales.x;
                    const yScale = chart.scales.y;

                    // Konversi nilai X dan Y ke posisi pixel
                    const xPosition1 = xScale.getPixelForValue(2);
                          const yPosition1 = yScale.getPixelForValue(4.5);

                          const xPosition2 = xScale.getPixelForValue(2);
                          const yPosition2 = yScale.getPixelForValue(13.5);

                          const xPosition3 = xScale.getPixelForValue(2);
                          const yPosition3 = yScale.getPixelForValue(22.5);

                          const xPosition4 = xScale.getPixelForValue(6);
                          const yPosition4 = yScale.getPixelForValue(4.5);

                          const xPosition5 = xScale.getPixelForValue(6);
                          const yPosition5 = yScale.getPixelForValue(13.5);

                          const xPosition6 = xScale.getPixelForValue(6);
                          const yPosition6 = yScale.getPixelForValue(22.5);

                          const xPosition7 = xScale.getPixelForValue(10);
                          const yPosition7 = yScale.getPixelForValue(4.5);

                          const xPosition8 = xScale.getPixelForValue(10);
                          const yPosition8 = yScale.getPixelForValue(13.5);

                          const xPosition9 = xScale.getPixelForValue(10);
                          const yPosition9 = yScale.getPixelForValue(22.5);

                    ctx.save();
                    ctx.font = "40px Arial";
                    ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';  // Warna watermark dengan transparansi
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText('Z11', xPosition1, yPosition1);
                          ctx.fillText('Z12', xPosition2, yPosition2);
                          ctx.fillText('Z13', xPosition3, yPosition3);
                          ctx.fillText('Z21', xPosition4, yPosition4);
                          ctx.fillText('Z22', xPosition5, yPosition5);
                          ctx.fillText('Z23', xPosition6, yPosition6);
                          ctx.fillText('Z31', xPosition7, yPosition7);
                          ctx.fillText('Z32', xPosition8, yPosition8);
                          ctx.fillText('Z33', xPosition9, yPosition9);

                    ctx.restore();
                }
            }
        ]
      });
  });
  </script>
  
<script>
  feather.replace();
</script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>