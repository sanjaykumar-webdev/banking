<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparksbank | users</title>

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
  <!-- navbar ends -->
  <?php
  include 'conn.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>
  <!-- Table section -->
  <div class="table_container" data-aos="fade-down">
    <h2 class="heading">Current users</h2>
    <table class="table">
      <thead>
        <tr>
          <th>S.No</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Contact</th>
          <th>E-Mail</th>
          <th>Balance</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td data-label="S.No"><?php echo $rows['id']; ?></td>
            <td data-label="Firstname"><?php echo $rows['firstname']; ?></td>
            <td data-label="Lastname"><?php echo $rows['lastname']; ?></td>
            <td data-label="Contact"><?php echo $rows['phone']; ?> </td>
            <td data-label="Email"><?php echo $rows['email']; ?></td>
            <td data-label="Balance"><?php echo $rows['balance']; ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Table section ends -->
  <!-- footer section -->
  <div class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-down">
        <h3>contact info</h3>
        <p> <i class="fas fa-map-marker-alt"></i> ranipet, Tamil Nadu, India - 632503</p>
        <p> <i class="fas fa-envelope"></i> sanjaykumar.webdev@gmail.com</p>
      </div>

      <div class="box" data-aos="fade-down">
        <h3>follow us</h3>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-instagram"></a>
        <a href="" class="fab fa-linkedin"></a>
        <a href="" class="fab fa-github"></a>
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

  <!-- custom js -->
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