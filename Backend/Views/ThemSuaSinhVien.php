<?php
    $action = isset($_GET["action"]) ? $_GET["action"] : null;
    $MaSV = isset($_GET["id"]) ? $_GET["id"] : null;
    $HoTen1 = isset($_POST["HoTen"]) ? $_POST["HoTen"] : null;
    $NgaySinh1 = isset($_POST["NgaySinh"]) ? $_POST["NgaySinh"] : null;
    $GioiTinh1 = isset($_POST["GioiTinh"]) ? $_POST["GioiTinh"] : null;
    $CMND1 = isset($_POST["CMND"]) ? $_POST["CMND"] : null;
    $SDT1 = isset($_POST["SĐT"]) ? $_POST["SĐT"] : null;
    $Khoa1 = isset($_POST["Khoa"]) ? $_POST["Khoa"] : null;
    $LopHoc1 = isset($_POST["LopHoc"]) ? $_POST["LopHoc"] : null;
    if($action == "add"){
        try{
                $sql = "INSERT INTO sinhvien (`hoTen`, `ngaySinh`, `gioiTinh`, `soCMND`, `SDT`, `khoa`, `lopHoc`) 
                VALUES('$HoTen1','$NgaySinh1',$GioiTinh1,'$CMND1','$SDT1','$Khoa1','$LopHoc1');";
                $resultAdd = mysqli_query($conn, $sql);
                if(isset($resultAdd) && $resultAdd!=""){
                    echo "<script>location.href='index.php?page=QLSinhVien'</script>";
                }
            mysqli_close($conn);
        }
        catch(Exception $e){
            echo "<script> alert('Xin kiểm tra lại dữ liệu vừa nhập')</script>";
        }
    }
    if($action == "edit"){
        try{
            $sql1 = "SELECT * FROM sinhvien WHERE idSinhVien = $MaSV";
            $result = mysqli_query($conn, $sql1);
            $row = mysqli_fetch_assoc($result);
            $HoTen = $row["hoTen"];
            $NgaySinh = $row["ngaySinh"];
            $GioiTinh = $row["gioiTinh"];
            $CMND = $row["soCMND"];
            $SDT = $row["SDT"];
            $Khoa = $row["khoa"];
            $LopHoc = $row["lopHoc"];

            $sqlEdit = "UPDATE sinhvien 
            SET hoTen='$HoTen1', ngaySinh='$NgaySinh1', gioiTinh=$GioiTinh1, soCMND='$CMND1', SDT='$SDT1', khoa='$Khoa1', lopHoc='$LopHoc1' 
            WHERE idSinhVien = '$MaSV'";
            $resultEdit= mysqli_query($conn, $sqlEdit);
            if(isset($resultEdit) && $resultEdit!=""){
                echo "<script>location.href='index.php?page=QLSinhVien'</script>";
            }
            mysqli_close($conn);
        }
        catch(Exception $e){
            echo "<script> alert('Xin kiểm tra lại dữ liệu vừa nhập')</script>";
        }
        
    }
    if($action == "delete"){
        try{
            $sqlDelete = "DELETE FROM sinhvien WHERE idSinhVien = '$MaSV'";
            $delete = mysqli_query($conn, $sqlDelete);
            mysqli_close($conn);
            if(isset($delete) && $delete != ""){
                echo "<script> alert('Xóa thành công!');location.href='index.php?page=QLSinhVien';</script>";
            }
        }
        catch(Exception $e){
            echo "<script> alert('Xin kiểm tra lại dữ liệu vừa nhập')</script>";
        }
    }
?>

<div class="col-md-12">  
    <div class="panel panel-primary">
        <?php
            if($action == "add")
                echo " <div class='panel-heading'>Thêm sinh viên</div>";
            if($action == "edit")
                echo " <div class='panel-heading'>Sửa sinh viên</div>";
        ?>
       
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <?php
                if($action == "edit"){
                    echo "<div class='row' style='margin-top:5px;'>
                            <div class='col-md-2'>Mã sinh viên</div>
                            <div class='col-md-10'>
                                <input type='text' value='$MaSV' name='MaSV' class='form-control' readonly>
                            </div>
                        </div>";
                }
            ?>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Họ tên</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($HoTen)? $HoTen:''; ?>" name="HoTen" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày sinh</div>
                <div class="col-md-10">
                    <input type="date" value="<?php echo isset($NgaySinh)? $NgaySinh:''; ?>" name="NgaySinh" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giới tính</div>
                <div class="col-md-10 input-control-sv">
                    <?php
                    if(isset($GioiTinh) && $GioiTinh==1 )
                        echo '<input type="radio" name="GioiTinh" value="0" >Nam<input type="radio" value="1" name="GioiTinh" checked>Nữ';
                    else
                        echo '<input type="radio" name="GioiTinh" value="0" checked>Nam<input type="radio" value="1" name="GioiTinh" >Nữ';
                    ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số chứng minh thư</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($CMND)? $CMND:''; ?>" name="CMND" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số điện thoại</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($SDT)? $SDT:''; ?>" name="SĐT" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Khoa</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($Khoa)? $Khoa:''; ?>" name="Khoa" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Lớp học</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($LopHoc)? $LopHoc:''; ?>" name="LopHoc" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="<?php if($action == "edit") echo "Sửa"; else echo "Thêm"; ?>" class="btn btn-primary" onclick="<script>location.href='index.php?page=QLSinhVien'</script>">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>
