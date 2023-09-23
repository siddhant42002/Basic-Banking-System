<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gringotts Wizarding Bank</title>
    
</head>
<body style="background-color: #F2E2FF;">

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/First_Bank_of_the_United_States%2C_Philadelphia%2C_Pennsylvania_LCCN2011633532_%28edited%29.jpg" class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Gringotts Wizarding Bank</h5>
              <p>A Safe place for your money.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1601597111158-2fceff292cdc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Transfers Money flawlessly</h5>
              <p>Transfering Money is just easy as Dialing a Phone.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1620714223084-8fcacc6dfd8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Banking is Even Easier</h5>
              <p>Visit Our New official Website.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Ways to Bank</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Where Banking Meets Convenience</h3>   
                <div class="container col my-5">
                   <p class="lead"> View all Customers →</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> View all Transaction →</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://focus.independent.ie/thumbor/5_3NtiIiJKtLcNHAdcPODlOmmSc=/0x0:2500x1666/960x640/prod-mh-ireland/2fcfd4ba-c562-11ed-b07f-0210609a3fe2" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="https://media.istockphoto.com/id/1424987910/photo/coworkers-with-stacked-hands-at-the-office.jpg?s=1024x1024&w=is&k=20&c=zRECSFVK3ZaCa-OCMH_xhrB5x2iGpjy7p-_RL3ywafw=" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
            <p>
            Welcome to Gringotts Wizarding Bank - Your Trusted Partner in Banking

          At Gringotts Wizarding Bank, we are committed to providing secure, efficient, and customer-centric banking services. With a strong foundation in the financial industry, we aim to empower individuals and businesses alike, helping them achieve their financial goals and aspirations.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>
        <br>
        <div class="row content">
          <div class="col-lg-6 offset-lg-6" >
            <img class="rounded img-fluid float-right" src="https://media.istockphoto.com/id/1465568487/photo/colleagues-watching-something-on-laptop-while-at-the-office.jpg?s=1024x1024&w=is&k=20&c=nAKXjxF54Qv8ECp36cst-6j1lv0BK6ypvRykn1OaWkw=" />
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0 " >
            <p>
            Gringotts Wizarding Bank is proud to be a financially strong institution. We are well-capitalized and have a solid track record of stability and growth. Our commitment to prudent financial management ensures the safety and security of your deposits.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>