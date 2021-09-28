<!-- <?php 

  $conn = mysqli_connect("localhost", "root" , "", "usis");
     
  if(!$conn){
   die("Connection failed: " . $conn->connect_error);
   }

  if(isset($_SESSION['id'])==true){
    $id = $_SESSION['id'];
    echo $id;
    $query = "SELECT * FROM student WHERE std_id='$id'";
    $result = mysqli_query($conn,$query) or die("The query could not be completed!");
    while($row = mysqli_fetch_array($result)){
      $name = $row['std_name'];
      $contact_no = $row['std_contact_no'];
      $email = $row['std_email_address'];
      $department_name= $row['std_department_name'];
    }
    ?>
    <table>
      <tr><td>Name: </td><td><?php echo $name ?></td></tr>
      <tr><td>Contact Number: </td><td><?php echo $contact_no ?></td></tr>
    </table>

<?php
  }
  else {die("You need to specify an ID!");}
 ?>
 -->

 <!-- <?php
session_start();

 $conn = mysqli_connect("localhost", "root" , "", "usis");
     
    if(!$conn){
     die("Connection failed: " . $conn->connect_error);
    }

if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  echo $id;
}
if (isset($_POST['logout'])) {
  echo $_SESSION['logout'], " Successfully logged out";
}

?> -->