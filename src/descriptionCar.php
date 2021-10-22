<?php
    include 'header.php';
    //1. Kết nối CSDL
    include 'config.php';
    
?>

    <!-- Body -->
    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Sever, truy vấn dữ liệu (SELECT) từ bảng db-employees -->
        <!-- Quy trình 4 bước -->
        <h3>Thông tin chi tiết xe:</h3>
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã PT</th>
                <th scope="col">Biển số</th>
                <th scope="col">Model</th>
                <th scope="col">Năm SX</th>
                <th scope="col">Kiểu ô tô</th>
                <th scope="col">Giá 1 Ngày</th>
                <th scope="col">Giá 1 Tuần</th>
                <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <!-- thay đổi theo csdl -->
                <?php 
                $id = $_GET['id'];

                $sql  = "SELECT * FROM cars WHERE vehicle_id = '$id'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)==1){
                    $row = mysqli_fetch_assoc($result);
                    
                    echo '<tr>';
                            echo '<th scope="row">'.$row['vehicle_id'].'</th>';
                            echo '<td>'.$row['license_no'].'</td>';
                            echo '<td>'.$row['model'].'</td>';
                            echo '<td>'.$row['year'].'</td>';
                            echo '<td>'.$row['ctype'].'</td>';
                            echo '<td>'.$row['drate'].'</td>';
                            echo '<td>'.$row['wrate'].'</td>';
                            echo '<td>'.$row['status'].'</td>';
                        echo '</tr>';
            
                }
                        
                //4. Đóng kết nối
                    mysqli_close($conn);
                ?>
                <!-- thay đổi theo csdl -->
            </tbody>
        </table>
    </main>
<?php include 'footer.php'?>