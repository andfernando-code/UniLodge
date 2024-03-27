<?php
require "config.php";
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "select * from student_form where s_email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["s_password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["s_id"];
            header("location: index.php");
        } else {
            echo
            "<script>alert('Worng Password !');</script>";
        }
    } else {
        echo
        "<script>alert('User Not Registered !');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/log_style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <form action="" class="" method="post" autocomplete="off">
                <table>
                    <tr style="text-align: center;">
                        <td colspan="2">
                            <h2>Login</h2>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">email : </label></td>
                        <td><input type="email" name="email" value="" id="email" required></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password : </label></td>
                        <td><input type="password" name="password" value="" id="password" required></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2">
                            <label for="dropdown">Login As:</label>
                            <select id="dropdown">
                                <option value="landlord">Landlord</option>
                                <option value="student" selected>Student</option>
                                <option value="warden">Warden</option>
                                <option value="admin">Admin</option>
                            </select>
                        </td>
                    </tr>

                    <tr style="text-align: center;">
                        <td colspan="2"><button type="submit" name="submit">Login</button></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td colspan="2"><a href="registration.php">didn't have an account ?</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

</html>