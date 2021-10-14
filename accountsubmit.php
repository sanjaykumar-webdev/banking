<?php
include 'conn.php';

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $balance = $_POST['balance'];
  $sql = "insert into users(firstname,lastname,phone,email,balance) values('{$firstname}','{$lastname}','{$phone}','{$email}','{$balance}')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script> alert('Account created sucessfully');
    window.location='transfermoney.php';
              </script>";
  }
}
