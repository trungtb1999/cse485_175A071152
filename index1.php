<?php require "header.php"; ?>
<div class="row">
    <div class="col-xl-12  col-md-12 col-xs-12 col-sm-12">
        <h3>Danh sách sinh viên</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Mã Giáo Viên</th>
                    <th>Mã Khoa </th>
                    <th>Mã Học Vị</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>email</th>
                    <th>Quê Quán </th>
                    <th>Mật Khẩu</th>
                </tr>
                <tbody >
                    <?php
                    
                    $query="SELECT * FROM dbo_giangvien ";
                    $result=mysqli_query( $db,$query) ;
                    while($giangvien=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>
                        <tr>
                        <td><?php echo $giangvien['MaGV'];?></td>
                        <td><?php echo $giangvien['MaKhoa'];?></td>
                        <td><?php echo $giangvien['MaHV'];?></td>
                        <td><?php echo $giangvien['HoLot'];?></td>
                        <td><?php echo $giangvien['Ten'];?></td>
                        <td><?php echo $giangvien['NgaySinh'];?></td>
                        <td><?php echo $giangvien['GioiTinh'];?></td>
                        <td><?php echo $giangvien['Email'];?></td>
                        <td><?php echo $giangvien['QueQuan'];?></td>
                        <td><?php echo $giangvien['MatKhau'];?></td>
                        

                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </thead>
        </table>
    </div>
</div>
<style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<?php require "footer.php";