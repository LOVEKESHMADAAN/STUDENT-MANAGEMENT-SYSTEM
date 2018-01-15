

<h1 align ="center"> WELCOME TO ADMIN </h1> 
<a  href="logout.php"  align="center" > LOGOUT</a> <br>

<html>
    <head>
    </head>
    <body >
        <form method="post" enctype="multipart/form-data">
        <table align="center" border="1"style="width:30%">
        <tr>
            <td> name <td>
            <td><input type="text" name="name" placeholder="enter your name " required></td>
              </tr>
         <tr>
            <td> email <td>
            <td><input type="email" name="email" placeholder="enter your email" required></td>
              </tr>
    <tr>
            <td> roll no <td>
            <td><input type="number" name="rollno" placeholder="enter your rllno " required></td>
              </tr>
    <tr>
            <td> city <td>
            <td><input type="text" name="city" placeholder="enter your city " required></td>
              </tr>
                <tr>
            <td> pcont <td>
            <td><input type="text" name="pcont" placeholder="enter your parent no. " required></td>
              </tr>
    <tr>
            <td> standard <td>
            <td><input type="text" name="standard" placeholder="enter your standard " required></td>
              </tr>


                <td  align="center" colspan="2"><input type="file" name="simg" > </td>
    
    
     <tr>

                <td colspan="2" align="center"><input type="submit" name="submit" value="submit "> </td>
    </tr>
    </table>
    

</form>
    </body>
<a href="admindash.php"  align="center" > BACK TO ADMIN</a>
</html>

<?php
if(isset($_POST['submit']))
{
     $con=mysqli_connect('localhost','root','','sms');
    if($con)
        echo "";
 
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $roll=$_POST['rollno'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont']; 
    $std=$_POST['standard'];
    $imagename=$_FILES['simg']['name'];
    $tempimagename=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempimagename,"../dataimg/$imagename");     
    $query="INSERT INTO `student`(`name`, `email`, `roll no`, `city`, `pcont`, `std`,`image`) VALUES('$Name','$Email','$roll','$city','$pcont','$std','$imagename')";
$run=mysqli_query($con,$query);
if($run==TRUE)
 echo "data inserted" ;
else
    echo "error";
}
?>