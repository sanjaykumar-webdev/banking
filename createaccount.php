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
  <form action="accountsubmit.php" method="POST">
    <div class="wrapper">
      <div class="title">
        create account
      </div>
      <div class="form">
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
  <script src="js/script.js"></script>
</body>

</html>