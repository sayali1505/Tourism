<?php
    session_start();
?>

<html>
    <form name="form1" method="post" action="sir_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SignIn" name="submit1"></td>
            </tr>
        </table>
    </form>
</html>

<?php
    if (isset($_POST['submit1'])) {
        $v1 = "nisha";
        $v2 = "nisha";
        $v3 = $_POST['name'];
        $v4 = $_POST['pwd'];
        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 1 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
            header('Location: homepage.php');
        } 

else {
            echo "Please enter the username or password again!";
        }
    }
?>