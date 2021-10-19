<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }



    // constraint to check insufficient balance
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {

        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);

        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['firstname'];
        $receiver = $sql2['firstname'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='transferhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>

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

    <!-- Table section -->
    <div class="table_container" data-aos="fade-down">
        <h2 class="heading">Transfer Money</h2>
        <?php
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
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
                    <tr>
                        <td data-label="S.No"><?php echo $rows['id']; ?></td>
                        <td data-label="firstname"><?php echo $rows['firstname']; ?></td>
                        <td data-label="lastname"><?php echo $rows['lastname']; ?></td>
                        <td data-label="contact"><?php echo $rows['phone']; ?> </td>
                        <td data-label="email"><?php echo $rows['email']; ?></td>
                        <td data-label="balance"><?php echo $rows['balance']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="wrapper">
                <div class="title">
                    Transfer Here
                </div>
                <div class="form">
                    <div class="inputfield">
                        <label>Amount</label>
                        <input type="text" class="input" required size="15" name="amount">
                    </div>
                    <div class="inputfield">
                        <label>Transfer To:</label>
                        <select name="to" class="input" required>
                            <option value="" disabled selected>Choose</option>
                            <?php
                            $sid = $_GET['id'];
                            $sql = "SELECT * FROM users where id!=$sid";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                echo "Error " . $sql . "<br>" . mysqli_error($conn);
                            }
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <option class="table" value="<?php echo $rows['id']; ?>">

                                    <?php echo $rows['firstname']; ?> (Balance:
                                    <?php echo $rows['balance']; ?> )

                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="inputfield">
                        <input type="submit" value="Transfer" name="submit" class="btn">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-map-marker-alt"></i> ranipet, Tamil Nadu, India - 632503</p>
                <p> <i class="fas fa-envelope"></i> sanjaykumar.webdev@gmail.com</p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/profile.php?id=100007187738996" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/may_be_your_friend?utm_medium=copy_link" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/sanjay-kumar-442726220/" class="fab fa-linkedin"></a>
                <a href="https://github.com/sanjaykumar-webdev" class="fab fa-github"></a>
            </div>

            <div class="box">
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