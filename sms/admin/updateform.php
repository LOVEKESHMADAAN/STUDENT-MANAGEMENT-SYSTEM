<?php
    session_start();

      if(isset($_SESSION['uid']))
      {  
        echo"";   
      }
      else
      {
          header('location:../login.php');
      }
 ?>
<h1 align ="center"> WELCOME TO ADMIN </h1> 
<a href="logout.php"  align="center" > LOGOUT</a> <br>
<a float="right" href="admindash.php"  align="center"  style="margin-left:70px" > BACK TO ADMIN</a>
<?php
  include('../dbcon.php');
  $sid=$_GET['sid'];
  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
?>
             <form method="post"  action="updatedata.php" enctype="multipart/form-data">
             <table align="center" border="1"style="width:30%">
             <tr>
             <td> name <td>
             <td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
             </tr>
             <tr>
             <td> email <td>
             <td><input type="email" name="email" value=<?php echo $data['email'];?>  required></td>
             </tr>
             <tr>
             <td> roll no <td>
             <td><input type="number" name="rollno" value=<?php echo $data['roll no'];?> required></td>
             </tr>
             <tr>
             <td> city <td>
             <td><input type="text" name="city"  value=<?php echo $data['city'];?> required></td>
             </tr>
            <tr>
            <td> pcont <td>
            <td><input type="text" name="pcont"  value=<?php echo $data['pcont'];?> required></td>
            </tr>
             <tr>
            <td> standard <td>
            <td><input type="text" name="standard"  value=<?php echo $data['std'];?> required></td>
            </tr>

    <td  align="center" colspan="2"><input type="file" name="simg" > </td>
    <tr>
        <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
        <td colspan="2" align="center"> <a href="updatedata.php"><button> submit </button></a></td>
    </tr>
    </table>
    </form>