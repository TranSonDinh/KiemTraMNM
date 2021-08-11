
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?page=ThemSuaSinhVien&action=add" class="btn btn-primary">Thêm sinh viên</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách sinh viên</div>
        <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th style="max-width: 100px;">Mã sinh viên</th>
                        <th style="max-width: 180px;">Họ tên</th>
                        <th>Ngày sinh</th>
                        <th style="max-width: 100px;">Giới tính</th>
                        <th style="max-width:100px;">Số CMND</th>
                        <th style="max-width: 100px;">SĐT</th>
                        <th style="max-width: 150px;">Ngành học</th>
                        <th style="max-width: 150px;">Lớp</th>
                        <th style="max-width:100px;"></th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM sinhvien";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $row["gioiTinh"]==0? $gt = "Nam" : $gt = "Nữ";
                            echo "<tr>
                                <td style='max-width: 100px;'>".$row["idSinhVien"]."</td>
                                <td style='max-width: 180px;'>".$row["hoTen"]."</td>
                                <td style='max-width: 100px;'>".$row["ngaySinh"]."</td>
                                <td style='max-width: 100px;'>".$gt."</td>
                                <td style='max-width: 100px;'>".$row["soCMND"]."</td>
                                <td style='max-width: 100px;'>".$row["SDT"]."</td>
                                <td style='max-width: 150px;'>".$row["khoa"]."</td>
                                <td style='max-width: 150px;'>".$row["lopHoc"]."</td>
                                <td  style='text-align:center;max-width:150px;'>
                                <a class='btn btn-info' href='index.php?page=ThemSuaSinhVien&action=edit&id=".$row["idSinhVien"]."'>Edit</a>&nbsp;
                                <a class='btn btn-danger' href='index.php?page=ThemSuaSinhVien&action=delete&id=".$row["idSinhVien"]."' onclick='return window.confirm('Are you sure?');'>Delete</a>
                                </td>
                            </tr>";
                        };
                    ?>
                </table>
        </div>
    </div>
</div>