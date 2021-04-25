<?php
if(isset($_POST['submit']))
{
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $bdate=$_POST['bdate'];
    $number=$_POST['number'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $status=$_POST['status'];
    $citizenship=$_POST['citizenship'];
    $religion=$_POST['religion'];
   
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<form action="" method="post">
<table align="center">
<h1 align="center">Your Informations</h1>
        <tr>
        <td>First Name:</td><td><?php echo $fname;?> </td>
        </tr>
        <tr>
        <td>Last Name:</td><td><?php echo $lname;?> </td>
        </tr>
        <tr>
        <td>Username:</td><td><?php echo $username;?> </td>
        </tr>
        <tr>
        <td>Password</td><td><?php echo $pass;?> </td>
        </tr>
        <tr>
        <td>Email Account</td><td><?php echo $email;?> </td>
        </tr>

        <tr>
        <td>Birth Date:</td><td><?php echo $bdate;?> </td>
        </tr>
        <tr>
        <td>Contact Number:</td><td><?php echo $number;?> </td>
        </tr>
        <tr>
        <td>Age:</td><td><?php echo $age;?> </td>
        </tr>
        <tr>
        <td>Address:</td><td><?php echo $address;?> </td>
        </tr>
        <tr>
        <td>Status:</td><td><?php echo $status;?> </td>
        </tr>
        <tr>
        <td>Citizenship:</td><td><?php echo $citizenship;?> </td>
        </tr>
        <tr>
        <td>Religion:</td><td><?php echo $religion;?> </td>
        </tr>
        
        
        <tr><input type="submit" name="BACK" value="BACK"></tr>
        </table>
        </form>
<?php }

if(isset($_POST['BACK']))
{
    header("Location:index.php");
}
?>