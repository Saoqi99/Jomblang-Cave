<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Goa-Jomblang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300&display=swap"
      rel="stylesheet"/>
    <!-- MY CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
      .custom-radio .form-check-input:checked {
          background-color: green;
          border-color: green;
      }

      h1{
        color:black;
        text-shadow: 1.5px 1.5px 1.5px white;
      }
      h2{
        color:white;
        text-shadow:1.5px 1.5px 1.5px black;
      }
      
    </style>
 
  </head>

  <body>
    <!-- Navbar Start -->
    <x-navbar></x-navbar>
    <!-- Navbar End -->

    <!--Rating  Page Start  -->
    <section class="Rating" id="rate">
      <main class="content">
        <div class="procedure">
        <h1 class="fw-bold">Procedure</h1>
        <a>Please to give response to statements by select one of the available answers with the following choices:
          <ul>
          <li><span>Strongly Disagree</span> If you strongly disagree with the statement </li>
          <li><span>Disagree</span> If you do not agree with the statement</li>
          <li><span>Neutral</span> If you are unable to provide an opinion on the statement</li>  
          <li><span>Agree</span> If you agree with the statement</li>
          <li><span>Strongly Agree</span> If you strongly agree with the statement</li>
          </ul>
          Please give answer on every statement and make sure no statements are missed not filled in.</a>
        </div>
      
        <form action={{ url('store_expert') }} method="POST">
          <!-- masukan nilai ke store_data dengan methode post--> 
         @csrf
          <!-- crsf digunkan untuk mengamankan proses transfer data-->  
          <div class="Main-value">
          <!-- VSE -->
            <h1 class="pt-5 pb-5 fw-bold ">Educational Value</h1>
            <div class="VSE d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
             <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jomblang Cave has its own characteristics that are different from other caves</h2> 
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio1" id="Q1o1" value="0">
                    <label class="form-check-label" for="Q1o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio1" id="Q1o2" value="0.25">
                    <label class="form-check-label" for="Q1o2">
                    Disagree
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio1" id="Q1o3" value="0.5">
                    <label class="form-check-label" for="Q1o3">
                     Neutral
                    </label>
                  </div>
                  <div   class="form-check">
                    <input class="form-check-input" type="radio" name="Radio1" id="Q1o4" value="0.75">
                    <label class="form-check-label" for="Q1o4">
                     Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio1" id="Q1o5" value="1">
                    <label class="form-check-label" for="Q1o5">
                     Strongly Agree
                    </label>
                  </div>
                  
                  @error('Radio1')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourist gained knowledge about the process of forming caves, rocks, ancient forests and other objects in Jomblang Cave</h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio2" id="Q2o1" value="0">
                  <label class="form-check-label" for="Q2o1">
                  Strongly Disagree
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio2" id="Q2o2" value="0.25">
                  <label class="form-check-label" for="Q2o2">
                  Disagree
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio2" id="Q2o3" value="0.5">
                  <label class="form-check-label" for="Q2o3">
                   Neutral
                  </label>
                </div>
                <div   class="form-check">
                  <input class="form-check-input" type="radio" name="Radio2" id="Q2o4" value="0.75">
                  <label class="form-check-label" for="Q2o4">
                   Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio2" id="Q2o5" value="1">
                  <label class="form-check-label" for="Q2o5">
                   Strongly Agree
                  </label>
                </div>
                
                @error('Radio2')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists find out about things related to Jomblang Cave from articles, papers, coverage, or social media such as FB, IG, YouTube, and others that discuss Jomblang Cave at the local, regional, national or international level.</h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio3" id="Q3o1" value="0">
                  <label class="form-check-label" for="Q3o1">
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio3" id="Q3o2" value="0.25">
                  <label class="form-check-label" for="Q3o2">
                  Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio3" id="Q3o3" value="0.5">
                  <label class="form-check-label" for="Q3o3">
                   Neutral
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio3" id="Q3o4" value="0.75">
                  <label class="form-check-label" for="Q3o4">
                   Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio3" id="Q3o5" value="1">
                  <label class="form-check-label" for="Q3o5">
                   Strongly Agree
                  </label>
                </div>
                @error('Radio3')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>

              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists can easily understand the process of formation of caves, rocks or objects in the cave area</h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio4" id="Q4o1" value="0">
                    <label class="form-check-label" for="Q4o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio4" id="Q4o2" value="0.25">
                    <label class="form-check-label" for="Q4o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio4" id="Q4o3" value="0.5">
                    <label class="form-check-label" for="Q4o3">
                     Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio4" id="Q4o4" value="0.75">
                    <label class="form-check-label" for="Q4o4">
                     Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio4" id="Q4o5" value="1">
                    <label class="form-check-label" for="Q4o5">
                     Strongly Agree
                    </label>
                  </div>
                  @error('Radio4')
                  <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>

            </div>

          <!-- VSA -->

            <h1 class="pt-5 pb-5 fw-bold">Aesthetic Value</h1>
            <div class="VSA d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
             <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourist can access at least 3 or more tourist spots in Jomblang cave</h2> 
                <div class="custom-radio d-flex justify-content-around p-3 fs-5 ">
                
                  <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio5" id="Q5o1" value="0">
                  <label class="form-check-label" for="Q5o1">
                  Strongly Disagree
                  </label>
                  </div>
                  <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio5" id="Q5o2" value="0.25">
                  <label class="form-check-label" for="Q5o2">
                  Disagree
                  </label>
                  </div>
                  <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio5" id="Q5o3" value="0.5">
                  <label class="form-check-label" for="Q5o3">
                  Neutral
                  </label>
                  </div>
                  <div  class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio5" id="Q5o4" value="0.75">
                  <label class="form-check-label" for="Q5o4">
                  Agree
                  </label>
                  </div>
                  <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio5" id="Q5o5" value="1">
                  <label class="form-check-label" for="Q5o5">
                  Strongly Agree
                  </label>
                  </div>
                  @error('Radio5')
                  <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jomblang Cave is large in size and is a place for ancient plant conservation</h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio6" id="Q6o1" value="0">
                  <label class="form-check-label" for="Q6o1">
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio6" id="Q6o2" value="0.25">
                  <label class="form-check-label" for="Q6o2">
                  Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio6" id="Q6o3" value="0.5">
                  <label class="form-check-label" for="Q6o3">
                   Neutral
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio6" id="Q6o4" value="0.75">
                  <label class="form-check-label" for="Q6o4">
                   Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio6" id="Q6o5" value="1">
                  <label class="form-check-label" for="Q6o5">
                   Strongly Agree
                  </label>
                </div>
                @error('Radio6')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jomblang Cave has a beautiful panorama, there is thriving plant vegetation, and there is no damage due to human activity</h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio7" id="Q7o1" value="0">
                    <label class="form-check-label" for="Q7o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio7" id="Q7o2" value="0.25">
                    <label class="form-check-label" for="Q7o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio7" id="Q7o3" value="0.5">
                    <label class="form-check-label" for="Q7o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio7" id="Q7o4" value="0.75">
                    <label class="form-check-label" for="Q7o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio7" id="Q7o5" value="1">
                    <label class="form-check-label" for="Q7o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio7')
                  <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The existence of Jomblang Cave is in harmony with other natural scenery around Jomblang Cave, both in terms of color, shape, etc., so that the view becomes more beautiful</h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                   
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio8" id="Q8o1" value="0">
                      <label class="form-check-label" for="Q8o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio8" id="Q8o2" value="0.25">
                      <label class="form-check-label" for="Q8o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio8" id="Q8o3" value="0.5">
                      <label class="form-check-label" for="Q8o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio8" id="Q8o4" value="0.75">
                      <label class="form-check-label" for="Q8o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio8" id="Q8o5" value="1">
                      <label class="form-check-label" for="Q8o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio8')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
              </div>

            </div>

          <!-- VPr -->

          <h1 class="pt-5 pb-5 fw-bold">Protection Value</h1>
          <div class="VPr d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
           <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">No damage was found to the environment due to tourist activities in Jomblang Cave</h2> 
              <div class="custom-radio d-flex justify-content-around p-3 fs-5 ">
                
                <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio9" id="Q9o1" value="0">
                  <label class="form-check-label" for="Q9o1">
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio9" id="Q9o2" value="0.25">
                  <label class="form-check-label" for="Q9o2">
                  Disagree
                  </label>
                </div>
                <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio9" id="Q9o3" value="0.5">
                  <label class="form-check-label" for="Q9o3">
                  Neutral
                  </label>
                </div>
                <div  class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio9" id="Q9o4" value="0.75">
                  <label class="form-check-label" for="Q9o4">
                  Agree
                  </label>
                </div>
                <div class="form-check p-3">
                  <input class="form-check-input" type="radio" name="Radio9" id="Q9o5" value="1">
                  <label class="form-check-label" for="Q9o5">
                  Strongly Agree
                  </label>
                </div>
                @error('Radio9')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
            </div>
            <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
            <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There are efforts to protect the Jomblang cave from damage carried out by the surrounding community, managers, local, national and international governments
            </h2>
            <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio10" id="Q10o1" value="0">
                  <label class="form-check-label" for="Q10o1">
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio10" id="Q10o2" value="0.25">
                  <label class="form-check-label" for="Q10o2">
                  Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio10" id="Q10o3" value="0.5">
                  <label class="form-check-label" for="Q10o3">
                  Neutral
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio10" id="Q10o4" value="0.75">
                  <label class="form-check-label" for="Q10o4">
                  Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio10" id="Q10o5" value="1">
                  <label class="form-check-label" for="Q10o5">
                  Strongly Agree
                  </label>
                </div>
                @error('Radio10')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
            </div>

            <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
            <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jomblang Cave is easily damaged due to human activities or natural conditions
            </h2>
            <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio11" id="Q11o1" value="1">
                  <label class="form-check-label" for="Q11o1" >
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio11" id="Q11o2" value="0.75">
                  <label class="form-check-label" for="Q11o2" >
                  Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio11" id="Q11o3" value="0.5">
                  <label class="form-check-label" for="Q11o3" >
                  Neutral
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio11" id="Q11o4" value="0.25">
                  <label class="form-check-label" for="Q11o4" >
                  Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio11" id="Q11o5" value="0">
                  <label class="form-check-label" for="Q11o5" >
                  Strongly Agree
                  </label>
                </div>
                @error('Radio11')
                <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
            </div>

            <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The number of visitors allowed to access the Jomblang cave at the same time is appropriate, when compared to the area, susceptibility to damage, and the condition of the cave in accordance with the direction of Gunungkidul Regency Regional Regulation Number 3 of 2014, Article 20 letter e.
              </h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio12" id="Q12o1" value="0">
                    <label class="form-check-label" for="Q12o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio12" id="Q12o2" value="0.25">
                    <label class="form-check-label" for="Q12o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio12" id="Q12o3" value="0.5">
                    <label class="form-check-label" for="Q12o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio12" id="Q12o4" value="0.75">
                    <label class="form-check-label" for="Q12o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio12" id="Q12o5" value="1">
                    <label class="form-check-label" for="Q12o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio12')
                  <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>

            </div>

          </div>
          <div class="Added-value">
            <!-- VFn -->
              <h1 class="pt-5 pb-5 fw-bold">Functional Value</h1>
              <div class="VFn d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
               <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The location of Jomblang cave can be easily accessed by vehicle</h2> 
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                      
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio13" id="Q13o1" value="0">
                        <label class="form-check-label" for="Q13o1">
                        Strongly Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio13" id="Q13o2" value="0.25">
                        <label class="form-check-label" for="Q13o2">
                        Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio13" id="Q13o3" value="0.5">
                        <label class="form-check-label" for="Q13o3">
                        Neutral
                        </label>
                      </div>
                      <div  class="form-check">
                        <input class="form-check-input" type="radio" name="Radio13" id="Q13o4" value="0.75">
                        <label class="form-check-label" for="Q13o4">
                        Agree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio13" id="Q13o5" value="1">
                        <label class="form-check-label" for="Q13o5">
                        Strongly Agree
                        </label>
                      </div>
                      @error('Radio13')
                      <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                </div>

                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There are 3-6 or more other natural tourist attractions near the Jomblang cave location</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio14" id="Q14o1" value="0">
                      <label class="form-check-label" for="Q14o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio14" id="Q14o2" value="0.25">
                      <label class="form-check-label" for="Q14o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio14" id="Q14o3" value="0.5">
                      <label class="form-check-label" for="Q14o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio14" id="Q14o4" value="0.75">
                      <label class="form-check-label" for="Q14o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio14" id="Q14o5" value="1">
                      <label class="form-check-label" for="Q14o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio14')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
  
                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There are 3-6 or more other cultural tourist attractions near the Jomblang cave location</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio15" id="Q15o1" value="0">
                      <label class="form-check-label" for="Q15o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio15" id="Q15o2" value="0.25">
                      <label class="form-check-label" for="Q15o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio15" id="Q15o3" value="0.5">
                      <label class="form-check-label" for="Q15o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio15" id="Q15o4" value="0.75">
                      <label class="form-check-label" for="Q15o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio15" id="Q15o5" value="1">
                      <label class="form-check-label" for="Q15o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio15')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
  
                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The location of the Jomblang cave is close to the city or village center with a distance of less than 5 km</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                     
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio16" id="Q16o1" value="0">
                        <label class="form-check-label" for="Q16o1">
                        Strongly Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio16" id="Q16o2" value="0.25">
                        <label class="form-check-label" for="Q16o2">
                        Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio16" id="Q16o3" value="0.5">
                        <label class="form-check-label" for="Q16o3">
                        Neutral
                        </label>
                      </div>
                      <div  class="form-check">
                        <input class="form-check-input" type="radio" name="Radio16" id="Q16o4" value="0.75">
                        <label class="form-check-label" for="Q16o4">
                        Agree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio16" id="Q16o5" value="1">
                        <label class="form-check-label" for="Q16o5">
                        Strongly Agree
                        </label>
                      </div>
                      @error('Radio16')
                      <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                </div>

                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There is a network of local and national roads near Jomblang cave</h2> 
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                   
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio17" id="Q17o1" value="0">
                      <label class="form-check-label" for="Q17o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio17" id="Q17o2" value="0.25">
                      <label class="form-check-label" for="Q17o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio17" id="Q17o3" value="0.5">
                      <label class="form-check-label" for="Q17o3">
                       Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio17" id="Q17o4" value="0.75">
                      <label class="form-check-label" for="Q17o4">
                       Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio17" id="Q17o5" value="1">
                      <label class="form-check-label" for="Q17o5">
                       Strongly Agree
                      </label>
                    </div>
                    @error('Radio17')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There are supporting facilities such as parking lots, gas stations, meeting points, near the Jomblang cave, making it easier for tourists to visit the Jomblang cave</h2> 
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio18" id="Q18o1" value="0">
                        <label class="form-check-label" for="Q18o1">
                        Strongly Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio18" id="Q18o2" value="0.25">
                        <label class="form-check-label" for="Q18o2">
                        Disagree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio18" id="Q18o3" value="0.5">
                        <label class="form-check-label" for="Q18o3">
                        Neutral
                        </label>
                      </div>
                      <div  class="form-check">
                        <input class="form-check-input" type="radio" name="Radio18" id="Q18o4" value="0.75">
                        <label class="form-check-label" for="Q18o4">
                        Agree
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio18" id="Q18o5" value="1">
                        <label class="form-check-label" for="Q18o5">
                        Strongly Agree
                        </label>
                      </div>
                      @error('Radio18')
                      <span class="text-danger">{{ $message }} </span>
                      @enderror
                    </div>
                </div>
  
              </div>
  
            <!-- VTr -->
  
              <h1 class="pt-5 pb-5 fw-bold">Touristic Value</h1>
              <div class="VTr d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
               <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jombang Cave is well known on a national and international scale as a UNESCO Global Geopark area</h2> 
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5 ">
                  
                    <div class="form-check p-3">
                      <input class="form-check-input" type="radio" name="Radio19" id="Q19o1" value="0">
                      <label class="form-check-label" for="Q19o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check p-3">
                      <input class="form-check-input" type="radio" name="Radio19" id="Q19o2" value="0.25">
                      <label class="form-check-label" for="Q19o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check p-3">
                      <input class="form-check-input" type="radio" name="Radio19" id="Q19o3" value="0.5">
                      <label class="form-check-label" for="Q19o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check p-3">
                      <input class="form-check-input" type="radio" name="Radio19" id="Q19o4" value="0.75">
                      <label class="form-check-label" for="Q19o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check p-3">
                      <input class="form-check-input" type="radio" name="Radio19" id="Q19o5" value="1">
                      <label class="form-check-label" for="Q19o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio19')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The number of tourists visiting Jomblang cave has been regulated in advance by the management</h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio20" id="Q20o1" value="0">
                      <label class="form-check-label" for="flexRadioDefault1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio20" id="Q20o2" value="0.25">
                      <label class="form-check-label" for="Q20o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio20" id="Q20o3" value="0.5">
                      <label class="form-check-label" for="Q20o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio20" id="Q20o4" value="0.75">
                      <label class="form-check-label" for="Q20o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio20" id="Q20o5" value="1">
                      <label class="form-check-label" for="Q20o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio20')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
  
                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists feel safe in Jomblang cave because they are accompanied by expert and reliable guides</h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio21" id="Q21o1" value="0">
                      <label class="form-check-label" for="Q21o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio21" id="Q21o2" value="0.25">
                      <label class="form-check-label" for="Q21o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio21" id="Q21o3" value="0.5">
                      <label class="form-check-label" for="Q21o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio21" id="Q21o4" value="0.75">
                      <label class="form-check-label" for="Q21o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio21" id="Q21o5" value="1">
                      <label class="form-check-label" for="Q21o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio21')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
  
                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Jomblang Cave is comfortable to visit because there is lots of infrastructure such as toilets, rest areas, walking paths, water sources and others</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio22" id="Q22o1" value="0">
                      <label class="form-check-label" for="Q22o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio22" id="Q22o2" value="0.25">
                      <label class="form-check-label" for="Q22o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio22" id="Q22o3" value="0.5">
                      <label class="form-check-label" for="Q22o3">
                       Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio22" id="Q22o4" value="0.75">
                      <label class="form-check-label" for="Q22o4">
                       Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio22" id="Q22o5" value="1">
                      <label class="form-check-label" for="Q22o5">
                       Strongly Agree
                      </label>
                    </div>
                    @error('Radio22')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists feel comfortable visiting Jomblang cave because the location of Jomblang cave is close to the accommodation</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio23" id="Q23o1" value="0"> 
                      <label class="form-check-label" for="Q23o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio23" id="Q23o2" value="0.25">
                      <label class="form-check-label" for="Q23o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio23" id="Q23o3" value="0.5">
                      <label class="form-check-label" for="Q23o3">
                       Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio23" id="Q23o4" value="0.75">
                      <label class="form-check-label" for="Q23o4">
                       Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio23" id="Q23o5" value="1">
                      <label class="form-check-label" for="Q23o5">
                       Strongly Agree
                      </label>
                    </div>
                    @error('Radio23')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>

                <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                  <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists feel comfortable visiting the Jomblang cave because the guides have certification regarding cave tracing safety</h2>
                  <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                    
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio24" id="Q24o1" value="0">
                      <label class="form-check-label" for="Q24o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio24" id="Q24o2" value="0.25">
                      <label class="form-check-label" for="Q24o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio24" id="Q24o3" value="0.5">
                      <label class="form-check-label" for="Q24o3">
                       Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio24" id="Q24o4" value="0.75">
                      <label class="form-check-label" for="Q24o4">
                       Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio24" id="Q24o5" value="1">
                      <label class="form-check-label" for="Q24o5">
                       Strongly Agree
                      </label>
                    </div>
                    @error('Radio24')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
                </div>
  
              </div>
  
            <!-- VSf -->
  
            <h1 class="pt-5 pb-5 fw-bold">Safety Value</h1>
            <div class="VSf d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The conditions of tourist destinations make tourists feel dangerous</h2> 
                <div class="custom-radio d-flex justify-content-around p-3 fs-5 ">
                 
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio25" id="Q25o1" value="1">
                    <label class="form-check-label" for="Q25o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio25" id="Q25o2" value="0.75">
                    <label class="form-check-label" for="Q25o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio25" id="Q25o3" value="0.5">
                    <label class="form-check-label" for="Q25o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio25" id="Q25o4" value="0.25">
                    <label class="form-check-label" for="Q25o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio25" id="Q25o5" value="0">
                    <label class="form-check-label" for="Q25o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio25')
                  <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The existence of preparedness procedures in dangerous conditions makes tourists feel safe carrying out tourist activities
              </h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio26" id="Q26o1" value="0">
                  <label class="form-check-label" for="Q26o1">
                  Strongly Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio26" id="Q26o2" value="0.25">
                  <label class="form-check-label" for="Q26o2">
                  Disagree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio26" id="Q26o3" value="0.5">
                  <label class="form-check-label" for="Q26o3">
                   Neutral
                  </label>
                </div>
                <div  class="form-check">
                  <input class="form-check-input" type="radio" name="Radio26" id="Q26o4" value="0.75">
                  <label class="form-check-label" for="Q26o4">
                   Agree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Radio26" id="Q26o5" value="1">
                  <label class="form-check-label" for="Q26o5">
                   Strongly Agree
                  </label>
                </div>
                @error('Radio26')
                  <span class="text-danger">{{ $message }} </span>
                @enderror
              </div>
              </div>
  
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Monitoring the condition of tourist infrastructure and security practices makes tourists feel safe when carrying out tourist activities
              </h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
              
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio27" id="Q27o1" value="0">
                    <label class="form-check-label" for="Q27o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio27" id="Q27o2" value="0.25">
                    <label class="form-check-label" for="Q27o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio27" id="Q27o3" value="0.5">
                    <label class="form-check-label" for="Q27o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio27" id="Q27o4" value="0.75">
                    <label class="form-check-label" for="Q27o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio27" id="Q27o5" value="1">
                    <label class="form-check-label" for="Q27o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio27')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>
  
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There is no crime or conflict at the Jomblang cave tourist location, making tourists feel safe
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio28" id="Q28o1" value="0">
                      <label class="form-check-label" for="Q28o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio28" id="Q28o2" value="0.25">
                      <label class="form-check-label" for="Q28o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio28" id="Q28o3" value="0.5">
                      <label class="form-check-label" for="Q28o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio28" id="Q28o4" value="0.75">
                      <label class="form-check-label" for="Q28o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio28" id="Q28o5" value="1">
                      <label class="form-check-label" for="Q28o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio28')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The existence of safety procedures and danger symbols at tourist destinations creates a feeling of comfort and security when carrying out tourist activities
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio29" id="Q29o1" value="0">
                    <label class="form-check-label" for="Q29o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio29" id="Q29o2" value="0.25">
                    <label class="form-check-label" for="Q29o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio29" id="Q29o3" value="0.5">
                    <label class="form-check-label" for="Q29o3">
                     Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio29" id="Q29o4" value="0.75">
                    <label class="form-check-label" for="Q29o4">
                     Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio29" id="Q29o5" value="1">
                    <label class="form-check-label" for="Q29o5">
                     Strongly Agree
                    </label>
                  </div>
                  @error('Radio29')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The safety instructions at the Jomblang cave tour are easy to understand
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                 
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio30" id="Q30o1" value="0">
                      <label class="form-check-label" for="Q30o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio30" id="Q30o2" value="0.25">
                      <label class="form-check-label" for="Q30o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio30" id="Q30o3" value="0.5">
                      <label class="form-check-label" for="Q30o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio30" id="Q30o4" value="0.75">
                      <label class="form-check-label" for="Q30o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio30" id="Q30o5" value="1">
                      <label class="form-check-label" for="Q30o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio30')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The existence of health and safety facilities for tourists creates a feeling of comfort and security during tourist activities
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                 
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio31" id="Q31o1" value="0">
                      <label class="form-check-label" for="Q31o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio31" id="Q31o2" value="0.25">
                      <label class="form-check-label" for="Q31o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio31" id="Q31o3" value="0.5">
                      <label class="form-check-label" for="Q31o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio31" id="Q31o4" value="0.75">
                      <label class="form-check-label" for="Q31o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio31" id="Q31o5" value="1">
                      <label class="form-check-label" for="Q31o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio31')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
              </div>
  
            </div>
  
            </div>

            <!-- VEj -->
  
            <h1 class="pt-5 pb-5 fw-bold">Enjoyable Value</h1>
            <div class="VEj d-grid gap-1 text-white shadow p-3 mb-5 bg-body rounded">
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists feel happy and enthusiastic about enjoying tourist activities in Jomblang cave</h2> 
                <div class="custom-radio d-flex justify-content-around p-3 fs-5 ">
                  
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio32" id="Q32o1" value="0">
                    <label class="form-check-label" for="Q32o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio32" id="Q32o2" value="0.25">
                    <label class="form-check-label" for="Q32o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio32" id="Q32o3" value="0.5">
                    <label class="form-check-label" for="Q32o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio32" id="Q32o4" value="0.75">
                    <label class="form-check-label" for="Q32o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check p-3">
                    <input class="form-check-input" type="radio" name="Radio32" id="Q32o5" value="1">
                    <label class="form-check-label" for="Q32o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio32')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
              <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists find new experiences that are not the same as previous tourist activities
              </h2>
              <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio33" id="Q33o1" value="0">
                    <label class="form-check-label" for="Q33o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio33" id="Q33o2" value="0.25">
                    <label class="form-check-label" for="Q33o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio33" id="Q33o3" value="0.5">
                    <label class="form-check-label" for="Q33o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio33" id="Q33o4" value="0.75">
                    <label class="form-check-label" for="Q33o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio33" id="Q33o5" value="1">
                    <label class="form-check-label" for="Q33o5">
                    Strongly Agree
                    </label>
                  </div>
                  @error('Radio33')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>
  
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Relations between fellow tourists are friendly and good
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio34" id="Q34o1" value="0">
                    <label class="form-check-label" for="Q34o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio34" id="Q34o2" value="0.25">
                    <label class="form-check-label" for="Q34o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio34" id="Q34o3" value="0.5">
                    <label class="form-check-label" for="Q34o3">
                    Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio34" id="Q34o4" value="0.75">
                    <label class="form-check-label" for="Q34o4">
                    Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio34" id="Q34o5" value="1">
                    <label class="form-check-label" for="Q34o5">
                    Strongly Agree
                    </label>
                  </div>
                    @error('Radio34')
                      <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>
  
              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">The atmosphere of visiting this place is so cool and makes tourists forget about their daily routine
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                 
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio35" id="Q35o1" value="0">
                      <label class="form-check-label" for="Q35o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio35" id="Q35o2" value="0.25">
                      <label class="form-check-label" for="Q35o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio35" id="Q35o3" value="0.5">
                      <label class="form-check-label" for="Q35o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio35" id="Q35o4" value="0.75">
                      <label class="form-check-label" for="Q35o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio35" id="Q35o5" value="1">
                      <label class="form-check-label" for="Q35o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio35')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">This place can be recommended to anyone who wants to travel
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
                
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio36" id="Q36o1" value="0">
                      <label class="form-check-label" for="Q36o1">
                      Strongly Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio36" id="Q36o2" value="0.25">
                      <label class="form-check-label" for="Q36o2">
                      Disagree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio36" id="Q36o3" value="0.5">
                      <label class="form-check-label" for="Q36o3">
                      Neutral
                      </label>
                    </div>
                    <div  class="form-check">
                      <input class="form-check-input" type="radio" name="Radio36" id="Q36o4" value="0.75">
                      <label class="form-check-label" for="Q36o4">
                      Agree
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Radio36" id="Q36o5" value="1">
                      <label class="form-check-label" for="Q36o5">
                      Strongly Agree
                      </label>
                    </div>
                    @error('Radio36')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">There is a strong intention to visit this place again
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
               
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio37" id="Q37o1" value="0">
                    <label class="form-check-label" for="Q37o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio37" id="Q37o2" value="0.25">
                    <label class="form-check-label" for="Q37o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio37" id="Q37o3" value="0.5">
                    <label class="form-check-label" for="Q37o3">
                     Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio37" id="Q37o4" value="0.75">
                    <label class="form-check-label" for="Q37o4">
                     Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio37" id="Q37o5" value="1">
                    <label class="form-check-label" for="Q37o5">
                     Strongly Agree
                    </label>
                  </div>
                  @error('Radio37')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>

              <div class="bg-secondary bg-gradient rounded pb-1 mb-1"> 
                <h2 class="p-3 fs-4 fw-bold text-center border-bottom border-white">Tourists feel calm and not worried while carrying out tourist activities
                </h2>
                <div class="custom-radio d-flex justify-content-around p-3 fs-5">
              
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio38" id="Q38o1" value="0">
                    <label class="form-check-label" for="Q38o1">
                    Strongly Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio38" id="Q38o2" value="0.25">
                    <label class="form-check-label" for="Q38o2">
                    Disagree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio38" id="Q38o3" value="0.5">
                    <label class="form-check-label" for="Q38o3">
                     Neutral
                    </label>
                  </div>
                  <div  class="form-check">
                    <input class="form-check-input" type="radio" name="Radio38" id="Q38o4" value="0.75">
                    <label class="form-check-label" for="Q38o4">
                     Agree
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Radio38" id="Q38o5" value="1">
                    <label class="form-check-label" for="Q38o5">
                     Strongly Agree
                    </label>
                  </div>
                  @error('Radio38')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
              </div>
  
            </div>
          </div>

          <div class="d-flex flex-column mb-3"> 
            <div class="form-check d-flex justify-content-center mt-3 mb-3 pt-3 pb-3 ">
              <input class="form-check-input me-3" type="checkbox" value="true" id="flexCheckDefault">
              <label class="form-check-label text-black" for="flexCheckDefault">
                I agree with the contents of the questionnaire that I filled out
              </label>
            </div>

            <br>
            <div class="d-flex justify-content-center mb-3">
            @error('checkbox')  
             <span class="text-danger">{{ $message }}</span> 
            @enderror
            </div>
            
            <div class="d-flex justify-content-around mt-3 mb-5 pt-3 pb-5">
            <input id="submit" type="submit" class="btn px-5 btn-success">
            </div>
          </div>
        </form>  
      </main>
    </section>
    <!--Rating Page End-->
    <footer style="background-color:#003121"class="footer mt-5 pt-5 pb-5">
      <div class="container text-center">
        <p>&copy; 2024  Jomblang Cave. All rights reserved.</p>
      </div>
    </footer>
    <!-- Feathers Icons -->
    <script>
      feather.replace();
    </script>
    <!-- Javasript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js\script.js"></script>
  </body>
</html>
