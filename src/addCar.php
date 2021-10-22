<?php 
    include 'header.php';
    //1. Kết nối CSDL
    include 'config.php';
?>

    <!-- Body -->
    <main class="container pt-4 pb-4">
        <h2 >Thêm Xe</h2>
        
        <form action = "process-add-emp.php" method = "post">
            <div class="form-group row ">
                <label for="vehicle_id" class="col-sm-3 col-form-label">Mã PT:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control mb-2" id="vehicle_id" name="vehicle_id" >
                </div>
            </div>
            <div class="form-group row">
                <label for="license_no" class="col-sm-3 col-form-label">Biển số xe:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control mb-2" id="license_no" name="license_no">
                </div>
            </div>
            <div class="form-group row">
                <label for="model" class="col-sm-3 col-form-label">Model:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-2" id="model" name="model">
                </div>
            </div>
            <div class="form-group row">
                <label for="year" class="col-sm-3 col-form-label">Năm SX:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control mb-2" id="year" name="year">
                </div>
            </div>
            <div class="form-group row">
                <label for="ctype" class="col-sm-3 col-form-label">Kiểu ô tô:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control mb-2" id="ctype" name="ctype">
                </div>
            </div>
            <div class="form-group row">
                <label for="drate" class="col-sm-3 col-form-label">Giá thuê theo ngày:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control mb-2" id="drate" name="drate">
                </div>
            </div>
            <div class="form-group row">
                <label for="wrate" class="col-sm-3 col-form-label">Giá thuê theo tuần:</label>
                <div class="col-sm-10">
                <input type="number" class="form-control mb-2" id="wrate" name="wrate">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Cơ quan:</label>
                <div class="col-sm-10">
                    <select name="status" >
                        <?php 

                            //2. Thực hiện truy vấn
                            $sql = "SELECT status FROM cars";
                            $result = mysqli_query($conn, $sql);

                            //3. Phân tích và xử lý dữ liệu
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$row['status'].'">'.$row['status'].'</option>';
                                }
                            }

                        ?>
                        
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </div>

        </form>
    </main>
<?php include'footer.php'?>


    