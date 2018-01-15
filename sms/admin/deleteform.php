
<?php
$con=mysqli_connect('localhost','root','','sms');
   

$id=$_REQUEST['sid'];
$query="DELETE FROM `student` WHERE `id`='$id'";
 $run=mysqli_query($con,$query);
if($run==TRUE)
  { 
    ?>
  <script>
    alert('data deleted');
    window.open('delete.php','_self');
  </script>
<?php
 }

?>