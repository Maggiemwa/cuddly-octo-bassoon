<?php
session_start();

if(isset($_SESSION['user_id'])) {
  session_destroy();
  unset($_SESSION['student_id']);
  unset($_SESSION['name']);
  unset($_SESSION['course']);
  unset($_SESSION['dpt_name']);
  unset($_SESSION['status']);
  //unset($_SESSION['role']);
  unset($_SESSION['email']);
  header("Location: ../../index.php");
}
else {
  header("Location: ../../index.php");
}
?>
