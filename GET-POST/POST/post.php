<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
</head>
<body>
    <form method="POST">
        Username: <input type="text" name="username" value="" /> <br/>
        Password: <input type="passsword" name="password" value="" /><br/>
        <input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>
        <?php
            if(isset($_POST['form_click'])){
                echo 'Tên đăng nhập là: ' . $_POST['username'];
                echo '</br>';
                echo 'Mật khẩu là: ' . $_POST['password'];
            }
        ?>
    </form>
</body>
</html>