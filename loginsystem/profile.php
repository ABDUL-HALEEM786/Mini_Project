<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profie</title>

  <style>
    * {
      background-color: black;
      color: white;

    }

    h1 {
      font-family: cursive;
    }

    .p1 {
      position: relative;
      top: 50px;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  include 'dbconnection.php';
  //Checking session is valid or not
  if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
  } else {

    // for updating user info    
    if (isset($_POST['Submit'])) {
      $fname = $_POST['fname'];
      $contact = $_POST['contact'];
      $uid = intval($_GET['uid']);
      $query = mysqli_query($con, "update users set fname='$fname' ,roll='$roll' , contactno='$contact' where roll='$uid'");
      $_SESSION['msg'] = "Profile Updated successfully";
    }
  }
  $roll = $_SESSION['roll'];
  $fname = $_SESSION['fname'];

  $ret = mysqli_query($con, "select * from users where roll = '$roll'");
  if (!$ret) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
  }

  echo "<h1 align=center>Hello $fname</h1>";
  ?>

  <table border=2 cellpadding=10 cellspacing=5 align="center">

    <tr>
      <th> Name </th>
      <th> Data </th>

    </tr>
    <?php

    while ($row = mysqli_fetch_array($ret)) {
    ?>
      <tr>
        <td>Name</td>
        <td> <?php echo $row['fname'];  ?> </td>
      </tr>
      <tr>
        <td>Roll Number</td>
        <td> <?php echo $row['roll'];  ?> </td>
      </tr>
      <tr>
        <td>Branch</td>
        <td> <?php echo $row['branch'];  ?> </td>
      </tr>
      <tr>
        <td>Email Id</td>
        <td> <?php echo $row['email'];  ?> </td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td> <?php echo $row['contactno'];  ?> </td>
      </tr>




    <?php
    }
    ?>

  </table>

  <div class="p1">
    <marquee>*** Contact owner to change information</marquee>
  </div>

</body>

</html>