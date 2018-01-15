<?php
  function showdetails($std,$roll)
    {
      $con= mysqli_connect('localhost','root','','sms');
      $qry="SELECT * FROM `student` WHERE `roll no`='$roll' AND `std`='$std'";
    }
$run=mysqli_query($con,$qry);
if(mysqli_num_rows($run)>0)
  { 
    $data=mysqli_fetch_assoc($run);
    ?>
  <table>
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
      </tr>  <tr>
     
      
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
?>