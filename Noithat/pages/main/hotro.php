<div class="hotro">
    <p>Để được hỗ trợ, vui lòng nhập thông tin bên dưới và ấn Gửi. Team SaigonSneaker sẽ trả lời quí khách qua email
        trong vòng 24h.</p>
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên</label>
            <input type="text" name="user" class="inp form-control" id="exampleFormControlInput1" placeholder="User">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="email" class="inp form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nội dung</label>
            <!-- <input type="textarea" class="inpt form-control" id="exampleFormControlInput1" placeholder="Yêu cầu cần hỗ trợ"> -->
            <textarea class="inpt form-control" id="exampleFormControlInput1" name="conten"
                placeholder="Yêu cầu cần hỗ trợ" cols="10" rows="10"></textarea>
        </div>
        <input type="submit" name="button" value="Gửi" class="button">
    </form>
    <?php
    include './admincp/config/connect_db.php';

    if (isset($_POST['button'])) {
        //lấy dữ liệu từ from
        $user = $_POST['user'];
        $email = $_POST['email'];
        $conten = $_POST['conten'];
        if (!empty($user) && !empty($email) && !empty($conten)) {
            //nhập dữ liệu
            $insert = "INSERT INTO `tb_hotrokhachang` (`id`, `ten`, `email`, `noidung`, `created_time`) VALUES (NULL, '$user', '$email', '$conten', '".time()."')";
            $mysql = mysqli_query($conn, $insert);
            if ($mysql===true){
                echo 'Gửi yêu cầu thành công';
            }
            else {
                echo "Lỗi{$mysql}".$conn->error;
            }
        }else {
            echo 'Chưa nhập đủ thông tin';
        }
    }
    ?>
</div>