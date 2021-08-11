<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        table{
            margin: 0 auto;
        }
    </style>
</head>
<?php
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? md5($_POST["password"]) : null;
    try{
        if($username != null && $password != null){
            $sqlDK = "INSERT INTO user (`username`, `password`) 
            VALUES('$username','$password');";
            $resultDK = mysqli_query($conn, $sqlDK);
            if(isset($resultDK) && $resultDK!=""){
                echo "<script>location.href='Views/DangNhap.php'</script>";
            }
        }   
    }
    catch(Exception $e){
        echo "<script> alert('Xin kiểm tra lại dữ liệu vừa nhập')</script>";
    }
?>
<body>
    <form method="GET">
        <table>
            <tr>
                <th colspan="2">Đăng ký</th>
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
                <td colspan="2"><input type="submit" value="Đăng ký" /></td>
                <td><a href="Views/DangNhap.php">Đăng nhập</a></td>
            </tr>
        </table>
    </form>
</body>

</html>