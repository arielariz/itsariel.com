<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CASE STUDY</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
   
    <form action="send.php" method="post">
    <table align="center">
    <h1 align="center">SIGN UP PAGE</h1>
    <tr>
                 <td>First Name:</td>
                 <td><input type="text" name="fname" placeholder="Enter Your first name"> </td>
            </tr>
            <tr>
                 <td>Last Name:</td>
                 <td><input type="text" name="lname" placeholder="Enter Your last name"> </td>
            </tr>
            <tr>
                 <td>Username:</td>
                 <td><input type="text" name="username" placeholder="Enter your username"> </td>
            </tr>
            <tr>
                 <td>Password:</td>
                 <td><input type="text" name="pass" placeholder="Enter Your password"> </td>
            </tr>
           
            <tr>
                 <td>Email Address:</td>
                <td><input type="text" name="email" placeholder="example1234@gmail.com"> </td>
            </tr>
            <tr>
                 <td>Birthdate:</td>
                 <td><input type="date" name="bdate" placeholder="Enter Your bithdate"> </td>
            </tr>
            <tr>
                 <td>Contact Number:</td>
                 <td><input type="mobile" name="number" placeholder="Enter Your contact number"> </td>
            </tr>
            <tr>
                 <td>Age:</td>
                 <td><input type="number" name="age" placeholder="Enter Your age"> </td>
            </tr>
            <tr>
                 <td>Address:</td>
                 <td><input type="text" name="address" placeholder="Enter Your address"> </td>
            </tr>
            <tr>
                 <td>Status:</td>
                 <td><input type="text" name="status" placeholder="Enter Your status"> </td>
            </tr>
            <tr>
                 <td>Citizenship:</td>
                 <td><input type="text" name="citizenship" placeholder="Enter Your citizenship"> </td>
            </tr>
            <tr>
                 <td>Religion:</td>
                 <td><input type="text" name="religion" placeholder="Enter Your religion"> </td>
            </tr>

            <tr>
        <tr>
        <td colspan=2><input type="submit" name="submit" value="Submit" width-"100%"></td>
        </tr>
    </table>
    </form>
    <div>
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
    

    echo $fname . $lname . $username . $pass . $email . $bdate . $number . $age . $address . $status . $citizenship. $religion;
    
}
?>
    </div>
</body>
</html>