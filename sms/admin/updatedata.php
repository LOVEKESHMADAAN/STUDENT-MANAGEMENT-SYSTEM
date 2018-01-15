<?php
$con=mysqli_connect('localhost','root','','sms');
    if($con)
        echo "";
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $roll=$_POST['rollno'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont']; 
    $std=$_POST['standard'];
    $id=$_POST['sid'];
    $imagename=$_FILES['simg']['name'];
    $tempimagename=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempimagename,"../dataimg/$imagename");     
  $query="UPDATE `student` SET `id` = '$id', `name` = '$Name', `email` = '$Email', `roll no` = '$roll', `city` = '$city', `pcont` = '$pcont', `std` = '$std' WHERE `student`.`id` = $id; ";  

$run=mysqli_query($con,$query);
if($run==TRUE)
  { 
    ?>
  <script>
    alert('data inserted');
    window.open('updateform.php?sid=<?php echo $id;?>','_self');
  </script>
    
  
<?php

}
?>