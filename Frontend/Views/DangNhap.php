<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        table{
            margin: 0 auto;
        }
    </style>
</head>
<?php
    try{
        $conn = mysqli_connect("localhost","root","","dkhp");
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? md5($_POST["password"]) : null;
        if($username != null && $password != null){
            $sqlDN = "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password';";
            $resultDN = mysqli_query($conn, $sqlDN);
            if(isset($resultDN) && $resultDN!=""){
                session_start();
                $_SESSION["username"] = $username;
                echo "<script>location.href='Home.php'</script>";
            }
        }
        
        
    }
    catch(Exception $e){
        echo "<script> alert('Xin kiểm tra lại dữ liệu vừa nhập')</script>";
    }
?>
<body>
    <form method="post">
        <table>
            <tr>
                <th colspan="2">Đăng Nhập</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Đăng nhập" /></td>
                <td><a href="DangKy.php">Đăng ký</a></td>
            </tr>
        </table>
    </form>
</body>

</html>