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
<?php
include('header.php');

?>
<html>
    <body>
<div class="admintitle" align ="center">
<h1>WELCOME TO ADMIN DASHBOARD</h1>

    <h4><a href="logout.php">  LOGOUT</a></h4>
</div>
    
    <div class="dashboard">
        <table border="2px" style="width=50%" align="center">
        <tr>
            <td> 1.</td><td><a href="addstudent.php">INSERT STUDENT</a></td>
            </tr>
            <tr>
            <td> 2.</td><td><a href="updatestudent.php">UPDATE STUDENTS</a></td>
            </tr>
            <tr>
            <td> 3.</td><td><a href="delete.php">DELETE STUDENT</a></td>
            </tr>
        
        </table>
        </div>
</body>
</html>