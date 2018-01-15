<html>
    <head>
    <title>
        student management system
    </title>
    </head>
    <body>
    <h3 align ="right"><a href="login.php"> ADMIN  LOGIN </a></h3>
            <h1 align="center"> WELCOME TO STUDENT MANAGEMENT SYSTEM  </h1>
      <form method ="post" action="index.php">
        <table style="width(50%);" align="center" border="3px">
      <tr>
          <td colspan="2"><h3> Student Information</h3></td>
      </tr>
      <tr>
          <td align="right"> Chooose standard</td>
            <td>
                <select name="std">
                 <option value="1"> 1st</option>
                  <option value="2"> 2nd</option>
                    <option value="3"> 3rd</option>
                     <option value="4"> 4th</option> 
                        <option value="5"> 5th</option>
                      <option value="6"> 6th</option>
                
                
                </select>
      </tr>
    
          <tr>
          <td >Enter roll no.</td>
              <td> <input type="text" name ="roll" ></td>
      </tr>
      <tr>
          <td colspan="2" align ="center"> <input type="submit" value="Show Info" name="submit"></td>
      </tr>
    </table>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
  {
      $std=$_POST['std'];
      $roll=$_POST['roll'];
      $con= mysqli_connect('localhost','root','','sms');
      $qry="SELECT * FROM `student` WHERE `roll no`='$roll' AND `std`='$std'";
  $run=mysqli_query($con,$qry);
  if(mysqli_num_rows($run)>0)
   { 
    $data=mysqli_fetch_assoc($run);
    ?>
    <table border="1px" align="center" width="30%">
       <tr>
       <th colspan="3">  STUDENT DETAIL  </th>
       </tr>
      <tr>
          <td rowspan ="5"> <img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px"> </td>
          <th>  roll no</th>
          <td> <?php echo $data['roll no'];?> </td>
      </tr>
        <tr>
          <th>  name</th>
          <td> <?php echo $data['name'];?> </td>
      </tr>    
        <tr> 
          <th>  standard</th>
          <td> <?php echo $data['std'];?></td>
      </tr>
        <tr>
          <th> city</th>
          <td> <?php echo $data['city'];?></td>
        </tr>
        <tr>
            <th> pcont</th>
            <td> <?php echo $data['pcont'];?></td>
        </tr>
    </table>
     
  <?php
}

     else
     {
         echo "<script> alert('no record');</script>";
     }
 
}
?>