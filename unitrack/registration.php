<?php
require "config.php";
if (!empty($_SESSION["id"])) {
    header("location: index.php");
}
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
    $phone = $_POST["phone"];
    $selectedoption = $_POST["dropdown"];

    $dup_email = mysqli_query($conn, "select * from student_form where s_email='$email'");
    $dup_password = mysqli_query($conn, "select * from student_form where s_password = '$password'");
    $dup_phone = mysqli_query($conn, "select * from student_form where s_phone = '$phone'");

    if (mysqli_num_rows($dup_email) > 0) {
        echo
        "<script>alert('this email already used !');</script>";
    } elseif (mysqli_num_rows($dup_password) > 0) {
        echo
        "<script>alert('this password already used !');</script>";
    } elseif (mysqli_num_rows($dup_phone) > 0) {
        echo
        "<script>alert('this phine number already used !');</script>";
    } else {
        if ($password == $c_password) {
            $query1 = "insert into student_form values('','$name','$email','$password','$phone')";
            mysqli_query($conn, $query1);
            echo
            "<script>alert('Registration Successfull !');</script>";
            header("location: login.php");
        } else {
            echo
            "<script>alert('password does not matched !');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/reg_style.css">
</head>

<body>
    <dev class="container">
        
        <form class="" action="" method="post" autocomplete="off">
        <table>
        <tr style="text-align: center;"><td colspan="2"><h2>Register as Student</h2></td></tr>
            
                <tr>
                    <td><label for="name">Name : </label></td>
                    <td><input type="text" name="name" id="name" value="" required></td>
                </tr>

                <tr>
                    <td><label for="email">email : </label></td>
                    <td><input type="email" name="email" id="email" value="" required></td>
                </tr>

                <tr>
                    <td><label for="password">password : </label></td>
                    <td><input type="password" name="password" id="password" value="" required></td>
                </tr>

                <tr>
                    <td><label for="c_password">Confirm Password : </label></td>
                    <td><input type="password" name="c_password" id="c_password" value="" required></td>
                </tr>

                <tr>
                    <td><label for="phone">Phone Number : </label></td>
                    <td><input type="text" name="phone" id="phone" value="" required></td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2">
                        <label for="dropdown">Register As:</label>
                        <select id="dropdown" name="dropdown">
                            <option value="landlord">Landlord</option>
                            <option value="student" selected>Student</option>
                        </select>
                    </td>
                </tr>

                <tr style="text-align: center;">
                    <td colspan="2"><button type="submit" name="submit">Register</button></td>
                </tr>
            
            <tr style="text-align: center;"><td colspan="2"><a href="login.php">already have an account?</a></td></tr>
            </table>
        </form>
        <br>
       
    </dev>
</body>

</html>