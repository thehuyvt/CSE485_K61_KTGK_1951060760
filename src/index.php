<?php
    include 'header.php';
?>

    <!-- Body -->
    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Sever, truy vấn dữ liệu (SELECT) từ bảng db-employees -->
        <!-- Quy trình 4 bước -->
        <h3>Danh sách xe cho thuê:</h3>
        <a href="addCar.php"class="btn btn-primary m-3"><i class="fas fa-car"></i> Thêm Xe</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã PT</th>
                <th scope="col">Biển số</th>
                <th scope="col">Model</th>
                <th scope="col">Năm SX</th>
                <th scope="col">Kiểu ô tô</th>
                <!-- <th scope="col">Giá 1 Ngày</th>
                <th scope="col">Giá 1 Tuần</th> -->
                <th scope="col">Chi tiết</th>
                <th scope="col">Sửa thông tin xe</th>
                <th scope="col">Xóa thông tin xe</th>
                </tr>
            </thead>
            <tbody>
                <!-- thay đổi theo csdl -->
                <?php 
                //1. Kết nối CSDL
                    include 'config.php';
                    
                //2. Thực hiện truy vấn
                    $sql = "SELECT vehicle_id, license_no, model, year, ctype	FROM cars ";
                    $result = mysqli_query($conn, $sql);//lưu kết quả trả về vào result
                //3. Phân tích và xử lý dữ liệu
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                                echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                                echo '<td>'.$row['license_no'].'</td>';
                                echo '<td>'.$row['model'].'</td>';
                                echo '<td>'.$row['year'].'</td>';
                                echo '<td>'.$row['ctype'].'</td>';
                                //echo '<td>'.$row['drate'].'</td>';
                                //echo '<td>'.$row['wrate'].'</td>';
                                echo '<td><a href="descriptionCar.php?id='.$row['vehicle_id'].'" class="text-primary"><i class="fas fa-car"></i> Chi tiết</a></td>';
                                echo '<td><a href="editCar.php?id='.$row['vehicle_id'].'" class="text-primary"><i class="fas fa-car"></i> Sửa thông tin xe</a></td>';
                                echo '<td><a href="deleteCar.php?id='.$row['vehicle_id'].'" class="text-primary"><i class="fas fa-car"></i> Xóa thông tin xe</a></td>';
                            echo '</tr>';
                        }
                    }
                //4. Đóng kết nối
                    mysqli_close($conn);
                ?>
                <!-- thay đổi theo csdl -->
            </tbody>
        </table>
    </main>
<?php include 'footer.php'?>


    