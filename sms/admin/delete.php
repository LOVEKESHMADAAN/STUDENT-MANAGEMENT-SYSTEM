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


<table >
  <form action="delete.php" method="post">
    <tr>
     <th> ENETR STANDARD</th>
     <input type="number" name="standard" placeholder="enter standard" required align="center">
    </tr>
    <tr align="center">
     <th style="margin-right=60px" align="center"> ENTER NAME</th>
     <input type="text" name="stuname" placeholder="enter student name"  style="margin-left:30px" required>
    </tr>
    <td colspan="2"><input type="submit" name="submit" value="search"></td>
    </form>
</table>
<a href="logout.php"  align="center" > LOGOUT</a> <br>
<a href="admindash.php"  align="center"  style="margin-left:70px" > BACK TO ADMIN</a>
<table align ="center" width="80%" border="1">
    <tr>
        <th> No.</th>
        <th> image</th>
        <th> name</th>
        <th> roll No</th>        
        <th> edit</th>
    </tr>
    <?php
 if(isset($_POST['submit']))
  { 
     include('../dbcon.php');  
     $standard=$_POST['standard'];
     $name=$_POST['stuname'];
     $sql="SELECT * FROM `student` WHERE `std`='$standard' AND `name` LIKE '%$name%'";
     $run=mysqli_query($con,$sql);
     if(mysqli_num_rows($run)<1)
     {
         echo "<tr><td colspan='5'> no record found </td></tr>";
     }
    else
      {  
        $count=0;
        while($data=mysqli_fetch_assoc($run))
         {   
            $count++;
          ?>
        <tr>
        <td> <?php echo $count; ?></td>
        <td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/> </td>
        <td> <?php echo $data['name'];?></td>
        <td> <?php echo $data['roll no'];?></td>
        <td><a href="deleteform.php?sid=<?php echo $data['id'];?>"> DELETE </a></td>
        </tr>
      
         <?php
          }
      }
     }
  ?>

</table>

