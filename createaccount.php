<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparksbank | create account</title>

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
      <a href="index.php">Home</a>
      <a href="users.php">users</a>
      <a href="transfermoney.php">transfer money</a>
      <a href="transferhistory.php">transfer history</a>
    </nav>
    <i class="fas fa-bars" id="menubar"></i>
  </header>
  <!-- navbar ends-->

  <!-- form -->
  <form action="accountsubmit.php" method="POST" data-aos="fade-down">
    <div class="wrapper">
      <div class="title">
        create account
      </div>
      <div class="form" data-aos="fade-left">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required size="15" name="firstname">
        </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required size="15" name="lastname">
        </div>
        <div class="inputfield">
          <label>phone no</label>
          <input type="text" class="input" required size="15" name="phone">
        </div>

        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email" required size="15">
        </div>
        <div class="inputfield">
          <label>Account Balance</label>
          <input type="text" class="input" name="balance" required size="15">
        </div>
        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
        </div>
        <div class="inputfield">
          <input type="submit" value="Register" name="submit" class="btn">
        </div>
      </div>
    </div>
  </form>
  <!-- form section -->
  <div class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-down">
        <h3>contact info</h3>
        <p> <i class="fas fa-map-marker-alt"></i> ranipet, Tamil Nadu, India - 632503</p>
        <p> <i class="fas fa-envelope"></i> sanjaykumar.webdev@gmail.com</p>
      </div>

      <div class="box" data-aos="fade-down">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/profile.php?id=100007187738996" class="fab fa-facebook-f"></a>
        <a href="https://instagram.com/may_be_your_friend?utm_medium=copy_link" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/sanjay-kumar-442726220/" class="fab fa-linkedin"></a>
        <a href="https://github.com/sanjaykumar-webdev" class="fab fa-github"></a>
      </div>

      <div class="box" data-aos="fade-down">
        <h3>quick links</h3>
        <a href="index.php">home</a><br><br>
        <a href="Users.php">Current users</a><br> <br>
        <a href="transfermoney.php">transfer Money</a><br> <br>
        <a href="transferhistory.php">transfer history</a><br> <br>
      </div>

    </div>

    <h1 class="credit">Created by <a href="#">Mr.Sanjay Kumar</a> | all rights reserved. </h1>

  </div>

  <!-- footer section ends -->
  <script src="js/script.js"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 100
    });
  </script>
</body>

</html>