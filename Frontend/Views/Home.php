<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký học phần</title>
</head>
<style>
    th,
    tr,
    td
    {
        border: 1px solid #000;
        padding:5px;
    }

    table {
        border: 1px solid #000;
        margin: 50px auto;
    }

    .right {
        float: right;
        margin-top: 0;
    }
</style>
<?php
session_start();
$conn = mysqli_connect("localhost","root","","dkhp");
    // function logout(){
    //     unset($_SESSION['username']);
    //     // echo "<script>location.href='Views/DangKy.php'</script>";
    // }
    $username = isset($_SESSION['username'])?$_SESSION['username']:"";
    $MaMH = isset($_POST["MaMH"])?$_POST["MaMH"]:"";
    if($username!=null){
        $sqluser = "SELECT * FROM user WHERE username = '".$username."'";
    $resultuser = mysqli_query($conn, $sqluser);
    $row = mysqli_fetch_assoc($resultuser);
    $idUser = $row['idUser'];
    if($idUser != null & $MaMH != null){
        $sqlLop = "INSERT INTO lop (`idUser`,`idMH`) VALUES(".$idUser.",'$MaMH');";
    $resultAdd = mysqli_query($conn, $sqlLop);
    if(isset($resultAdd) && $resultAdd!=""){
        echo "<script>alert('Đăng ký thành công!')</script>";
    }
    }
    }
    
    

?>
<body>
    <div id="name" class="right"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?></div>
    <div class="right"><a href="DangKy.php"><button value="Logout" >Logout</button></a></div>
    <form method="post">
        <select name="MaMH">
            <option>Chọn tên môn học</option>
            
            <?php
                $sql = "SELECT * FROM monhoc";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['idMH']."'>".$row["tenMH"]."</option>";
                };
            ?>
        </select>
        <input type="submit" value="Đăng ký" />
    </form>
</body>

</html>