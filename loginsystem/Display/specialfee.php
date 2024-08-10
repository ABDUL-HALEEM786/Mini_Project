<?php
session_start();
if (strlen($_SESSION['id'] == 0)) {
  header('location:logout.php');
} 

else {
    $servername = "localhost";
$username = "root";
$password = "";
$database = "payments";
}
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn) {
    die("Faliled to connect the data base".mysqli_connect_error($conn));
}

$roll1 = $_SESSION['roll'];
$query = "select * from specialfee where roll = '$roll1' and status = 'complete'";
$result = mysqli_query($conn,$query);




?>


<table class="table table-hover">
<tr>
<th> Paid Year</th>
<th>Branch</th>
  <th>Paid Amount</th>
  <th>Transaction Id</th>
  <th>Payment Status</th>
  <th>Transaction Date</th>

</tr>


<?php

while($row =mysqli_fetch_array($result)) {


  ?>
<tr>
  <td> <?php echo $row['year']; ?> </td>
  <td> <?php echo $row['branch']; ?> </td>
  <td> <?php echo $row['amount']; ?> </td>
  <td> <?php echo $row['payment_id']; ?> </td>
  <td> <?php echo $row['status']; ?> </td>
  <td> <?php echo $row['date']; ?> </td>


</tr>




  <?php
  }

?>
</table>