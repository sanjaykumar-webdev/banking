<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparksbank</title>

  <!-- custom stylesheet-->
  <link rel="stylesheet" href="css/style.css">

  <!--font awesome cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- AOS cdn -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- navbar -->
  <header>
    <a href="#" class="logo"><i class="fas fa-piggy-bank"></i>Sparksbank</a>
    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about" target="reserved">about</a>
      <a href="">transfer money</a>
      <a href="">transfer history</a>
    </nav>
    <i class="fas fa-bars" id="menubar"></i>
  </header>
  <!-- navbar ends-->


  <section class="home" id="home">

    <div class="content">
      <h3>Welcome to sparks bank</h3>
      <p>we provide 100% Security</p>
      <a href="createaccount.php"><button class="btn">Create Account</button></a>
    </div>

    <div class="image">
      <img src="img/tr.png" alt="img">
    </div>

  </section>

  <!-- home section ends -->


  <!-- about section -->

  <section class="about" id="about">

    <div class="image"></div>

    <div class="content">
      <h3>About Us</h3>
      <p>Sparks online banking helps accessing your bank account and carrying out financial transactions through the
        internet on your smartphone, tablet or computer.</p>
      <p>It’s quick, usually free and allows you to carry out a number of tasks such as paying bills and transferring
        money, without having to visit or call your bank.</p>
    </div>

  </section>

  <!-- about section ends -->

  <!-- footer section ends -->
  <div class="footer">

    <div class="box-container">

      <div class="box">
        <h3>contact info</h3>
        <p> <i class="fas fa-map-marker-alt"></i> ranipet, Tamil Nadu, India - 632503</p>
        <p> <i class="fas fa-envelope"></i> sanjaykumar.webdev@gmail.com</p>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-instagram"></a>
        <a href="" class="fab fa-linkedin"></a>
        <a href="" class="fab fa-github"></a>
      </div>

      <div class="box">
        <h3>quick links</h3>

        <a href="#home">home</a><br>
        <br>
        <a href="#about">About Us</a><br> <br>
        <a href="#top_customers">transfer Money</a><br> <br>
        <a href="/transaction">transfer history</a><br> <br>
      </div>

    </div>

    <h1 class="credit">Created by <a href="#">Mr.Sanjay Kumar</a> | all rights reserved. </h1>

  </div>

  <!-- footer section ends -->
  <!-- custom js -->
  <script src="js/script.js"></script>
</body>

</html>