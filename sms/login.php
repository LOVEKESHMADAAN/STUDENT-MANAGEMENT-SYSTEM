<?php
session_start();
if(isset($_SESSION['uid']))
  { 
    header('location:admin/admindash.php');  
  }
?>
    
<html>
    <head>
    <title>
      ADMIN LOGIN 
    </title>
</head>
    <body bgcolor="aqua">
              
        <h1 align ="center"> Admin Login</h1>
        <form action="login.php" method="post" >
        <table align="center">
            <tr>
                <td> USERNAME </td><td> <input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td> PASSWORD </td><td> <input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align ="center"> <input type="submit" name="login" value ="login"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
<?php
 include('dbcon.php');
if(isset($_POST['login']))
{ 
  $username=$_POST['uname'];  
  $password=$_POST['pass'];    
  $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";  
  $run= mysqli_query($con,$qry);
  $row=mysqli_num_rows($run);
 if($row<1)
   {
     ?>
      <script>
       alert('username or password does not match!!');
       windows.open('login.php','_self');
      </script>
      <?php
   }
  else
    { 
      $data=mysqli_fetch_assoc($run);
      $id=$data['id']; 
      $_SESSION['uid']=$id;  
      header('location:admin/admindash.php');
    }
}

?>