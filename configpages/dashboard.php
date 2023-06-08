<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Cozy Apartment</title>

    <link rel="stylesheet" href="../style.css" />
    
  </head>
  <body>
  <section id="header">
      <a href="#"><img src="../images/logo7.png" class="logo" alt="" /></a>
      <div id=log>
       
          <li><a href="">Welcome <?php echo $_SESSION['userlogin']?></a> 
          
          <div><a href="../apartments/studio.php">Find Apartments</a></div>
          
          <div id="logout"><a href="logout.php">Logout</a> </div>
      </li>
         
          
        
      </div>
      
    </section>
    

   
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../images/16.png"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://cdn.pixabay.com/photo/2020/09/03/10/58/bedroom-5540919_960_720.jpg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/1.jpeg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/2.jpg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../images/21.jpg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://cdn.pixabay.com/photo/2019/09/21/15/34/kitchen-4494167__340.jpg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://cdn.pixabay.com/photo/2017/02/24/12/24/bathroom-2094733__340.jpg"
            class="d-block w-100"
            height="400"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Cozy Apartment</h5>
            <p>“New address New beginning!”</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Feature</strong>
              <h3 class="mb-0"><strong>Swimming Pool</strong></h3>
              <br />

              <p class="card-text mb-auto">
                Taking a dip in a crisp, clean swimming pool is a great way to
                alleviate stress after a long day's work or beat the heat on a
                hot summer day.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="https://images.unsplash.com/photo-1597221336986-7a948756cd3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
              />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Feature</strong>
              <h3 class="mb-0"><strong>Laundry Room</strong></h3>
              <br />
              <p class="mb-auto">
                Get bigger loads washed and dried in lesser time, available 24
                hours which is super convenient for everyone to go and get their
                dirty clothes washed.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="https://images.unsplash.com/photo-1583172747862-afcb755ebd13?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-warning">Feature</strong>
              <h3 class="mb-0"><strong>Community Park</strong></h3>
              <br />

              <p class="card-text mb-auto">
                Take a quiet walk to nurture your mind, body, and energize your
                soul.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="https://images.unsplash.com/photo-1564409972016-2825589beaed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGNvbW11bml0eSUyMHBhcmslMjBwaWN0dXJlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
              />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-danger">Feature</strong>
              <h3 class="mb-0"><strong>Medical Assistant</strong></h3>
              <br />
              <p class="mb-auto">
                Without health life is not life; it is only a state of languor
                and suffering.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG51cnNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <h4 style="margin-top: -5%;">ABOUT US</h4>
        <div >
          <h6>Cozy Apartment helps you find an amazing deal on your next rental.</h6>
          <p> Since 2020, Cozyapartment.com has been preffered choice for customers looking for apartments. We focus on the best place at best price. </p>
          
        </div>
      </div>


      <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="footer">
            <!-- Content -->
            <h4>Contact Us</h4>
            <p >
                cozyapartment.balaju@gmail.com<br>
                01-0006622
            </p>
          </div>
          </div>
          <!-- Grid column -->


        

         
          
      
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" style="background-color:bisque ;">
        © 2020 Copyright
        <a href="/"> cozyapartment.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
