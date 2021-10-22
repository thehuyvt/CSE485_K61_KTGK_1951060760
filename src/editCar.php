<?php
    include'header.php';
    include'config.php';

    $id = $_GET['id'];

    $sql  = "SELECT * FROM cars WHERE vehicle_id = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $emp_name = $row['emp_name']; 
        $emp_position = $row['emp_position'];
        $emp_email = $row['emp_email'];
        $emp_mobile = $row['emp_mobile'];
        $office_id = $row['office_id'];
    }
    
?>
    <main class="container pt-4 pb-4">
        <h2 >Sửa Thông Tin Nhân Viên</h2>
        
        <form action="process-edit-emp.php" method = "post">
            <div class="form-group row ">
                <label for="empName" class="col-sm-2 col-form-label">Mã nhân viên:</label>
                <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="empID" name="empID" value="<?php echo $emp_id;?>">
                </div>
            </div>
            <div class="form-group row ">
                <label for="empName" class="col-sm-3 col-form-label">Tên nhân viên:</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control mb-2" id="empName" name="empName" value ="<?php echo $emp_name;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-3 col-form-label">Chức vụ:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control mb-2" id="empPosition" name="empPosition" value = "<?php echo $emp_position;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-3 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control mb-2" id="empEmail" name="empEmail" value = "<?php echo $emp_email;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-3 col-form-label">Số điện thoại:</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control mb-2" id="empMobile" name="empMobile" value="<?php echo $emp_mobile;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-3 col-form-label">Cơ quan:</label>
                <div class="col-sm-10">
                    <select name="officeName" id="officeName" >
                        <?php 

                            //2. Thực hiện truy vấn
                            $sql = "SELECT * FROM db_offices";
                            $result = mysqli_query($conn, $sql);

                            //3. Phân tích và xử lý dữ liệu
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
                                }
                            }

                        ?>
                        
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>

        </form>
    </main>


<?php
    include'../footer.php';
?>
