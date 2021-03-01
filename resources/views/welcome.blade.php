@extends('layouts.user')

@section('userside')

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="{{ asset('webimg/c1.jpg') }}" alt="First slide">
          <div class="container">
            <div style="background: rgba(0,0,0,0.5);" class="col-md-4 carousel-caption text-left">
              <h1 class="text-warning">UK School system</h1>
              <p>Highly Professional Teachers, Passionate for cutting-edge with brilliant ideas
committed to deliver Quality of education Services</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="{{ asset('webimg/c2.jpg') }}" alt="Second slide">
          <div class="container">
            <div style="background: rgba(0,0,0,0.5);" class="col-md-4 carousel-caption text-left">
              <h1 class="text-warning">UK Academy system</h1>
              <p>Highly Professional Teachers, Passionate for cutting-edge with brilliant ideas
committed to deliver Quality of education Services</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('webimg/c3.jpg') }}" alt="Third slide">
          <div class="container">
           <div style="background: rgba(0,0,0,0.5);" class=" col-md-4 carousel-caption text-left">
              <h1 class="text-warning">UK Concept College</h1>
              <p>Highly Professional Teachers, Passionate for cutting-edge with brilliant ideas
committed to deliver Quality of education Services</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<!-- about part -->
<section  style="background: lightgray">
<div class="pt-4 pb-4 text-center m-5 pb-5" >
          <h1 class="mb-3 text-primary featurette-heading mb-5 " style="font-size: 60px; font-weight: 800">About The UK School (UKS)</h1>
          <h1 class="mb-4 lead">Welcome to our “About The UK School (UKS). We discover and nurture children’s individual talents”.</h1>
          <p class=" px-5 text-left" style="font-size: 20px">
            The School is planned as an English medium co-educational school and is administrated by a committee of management. The campus of the school is located at prime location of the city with the safe and easy approach to all. The school is equipped with a well furnished library. The school is proud of well qualified and experienced faculty members for all classes. Renowned academicians who believe in the overall growth and development of their students are the advisors and guide of the school.
          </p>
          
        </div>
        </section>
<!-- /about part -->



<!-- banner -->
<img src="{{ asset('webimg/b11.jpg') }}">
<!-- /banner -->
<!-- student -->
    <section style="background:lightgray">
      <div class="container" style="padding-bottom: 0px ;background:no-repeat lightgray url({{asset('webimg/student1.png')}});">
        <div class="  row">
        <div class="col-md-7">
          
        </div>
        <div class="col-md-4 text-white py-5" style=" background: rgba(0,0,0,0.5);" >
          <div class=" text-warning  text-center h1 rounded-circle">
                   <i class="fas fa-quote-left"></i>
                  </div>
          <h2 class="featurette-heading text-warning mb-4">"Our student is our future"</h2>
          <p  style="font-size: 20px"  >Students are the root of development in country. Students play very important and big role in development of country. You can never hope for successful country if there are no educated people and policy for better education. Students who learn today, they will work for future of country. </p>
        </div>
         </div>
      </div>
      </section>
<!-- /student -->

<!-- facilities -->
          
          <div class="container text-center">
          <h1 class="mb-3 featurette-heading">Our Facilities</h1>
          <div class="bg-primary h2">
          </div>
         
          <div class="row">


            <div class="card col-md-6" >
              <img src="{{asset('webimg/fac5.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Computer Education</h5>
                <p class="card-text">The school has a well equipped computer lab. The school offers compulsory computer education to students from class I to XII.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card col-md-6" >
              <img src="{{asset('webimg/fac4.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Language</h5>
                <p class="card-text">To hire the highest quality teachers, our teacher recruitment process requires an English Language Proficiency Test.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card col-md-6" >
              <img src="{{asset('webimg/fac6.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Trips & events</h5>
                <p class="mt-4 mb-0">School events are days that students admire because it is a sign of enjoyment, a day of laughter and a time for everlasting friendships to continue</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card col-md-6" >
              <img src="{{asset('webimg/fac3.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Test sessions</h5>
                <p class="mt-4 mb-0">Testing in schools is usually thought to serve only the purpose of evaluating students and assigning them grades. ... Yes, students study and learn more when given assignments</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>            
          </div>
          
        </div>
<!-- /facilities -->

  <!-- popular instructors names -->
    <div class="container text-center">
     <div class="row ">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="mb-5">
              <h2 class="mb-1 featurette-heading">Popular Instructors</h2>
              <p class="mb-0">our pride</p>
            </div>
          </div>
     </div>

     <!-- teacher profiles -->
     <div class="row mb-6">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Card -->
          <div class="card mb-4 ">
            <!-- Card body -->
            <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('webimg/tp1.jpg')}}" height="100" class="rounded-circle avatar-xl mb-3" alt="">
                <h4 class="mb-0">Wade Warren</h4>
                <p class="mb-0 font-size-xs text-muted">Web Developer, Designer</p>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                <span>Students</span>
                <span class="text-dark">50,274</span>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2">
                <span>Instructor Rating</span>
                <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <span>Courses</span>
                <span class="text-dark"> 12 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Card -->
          <div class="card mb-4 ">
            <!-- Card body -->
            <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('webimg/tp3.jpg')}}" height="100" class="rounded-circle avatar-xl mb-3" alt="">
                <h4 class="mb-0">Hamza khan</h4>
                <p class="mb-0 font-size-xs text-muted">Mathematics expert</p>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                <span>Students</span>
                <span class="text-dark">1,004</span>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2">
                <span>Instructor Rating</span>
                <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <span>Courses</span>
                <span class="text-dark"> 42 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Card -->
          <div class="card mb-4 ">
            <!-- Card body -->
            <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('webimg/tp2.jpg')}}" height="100" class="rounded-circle avatar-xl mb-3" alt="">
                <h4 class="mb-0">Esther Howard</h4>
                <p class="mb-0 font-size-xs text-muted">Developer and Instructor</p>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                <span>Students</span>
                <span class="text-dark">26,060</span>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2">
                <span>Instructor Rating</span>
                <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <span>Courses</span>
                <span class="text-dark"> 3 </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Card -->
          <div class="card mb-4 ">
            <!-- Card body -->
            <div class="card-body">
              <div class="text-center">
                <img src="{{ asset('webimg/tp1.jpg')}}" height="100" class="rounded-circle avatar-xl mb-3" alt="">
                <h4 class="mb-0">
                  Sir Adnan
                </h4>
                <p class="mb-0 font-size-xs text-muted">English literature expert</p>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                <span>Students</span>
                <span class="text-dark">2,345</span>
              </div>
              <div class="d-flex justify-content-between border-bottom py-2">
                <span>Instructor Rating</span>
                <span class="text-warning">
                  4.5 <i class="mdi mdi-star"></i>
                </span>
              </div>
              <div class="d-flex justify-content-between pt-2">
                <span>Courses</span>
                <span class="text-dark"> 2 </span>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- /teacher profiles -->

    </div>

  <!-- /popular instructors name -->
  

  <div class="container text-center">
     <div class="row ">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="mb-5">
              <h2 class="mb-1 featurette-heading">Cofounder and CEO</h2>
              <p class="mb-0">our pride</p>
            </div>
          </div>
     </div>
    <div class="container marketing">          
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{asset('webimg/asfand.png')}}" width="140" height="140">
          <h2>CEO</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{asset('webimg/tp1.jpg')}}" width="140" height="140">
          <h2>Co founder & CEO</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{asset('webimg/tp1.jpg')}}" width="140" height="140">
        
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

     

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


<!-- galary -->
@endsection