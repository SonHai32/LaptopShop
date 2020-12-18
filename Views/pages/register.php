<?php

require_once "./connection.php";

$username = $password = "";
$username_error = $password_error = "";
///check user is logged in
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
}
///
else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty(trim($_POST["username"]))) {
            $username_error = "Vui lòng nhập tên tài khoản";
        } else {
            $username = trim($_POST["username"]);
        }
        if (empty(trim($_POST["password"]))) {
            $password_error = "Vui lòng nhập mật khẩu";
        } else {
            $password = trim($_POST["password"]);
        }

        $sql_query = "SELECT UserID FROM Users WHERE Username = :username and Password = :password";
        $db = DB_Connection::getInstance();
        $stmt = $db->prepare($sql_query);
        $stmt->execute(array('username' => $username, 'password' => $password));
        $user_exists = $stmt->rowCount() == 1;
        if ($user_exists) {
            $user_info = $stmt->fetch();
            $user_id = $user_info['UserID'];
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            header('location: index.php');
        } else {
        }
    }
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/Font-Awsome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../style/login.css">
    <script src="./script/jquery-3.4.1.min.js" charset="utf-8"></script>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="container-fluid vh-100 bg-main main-contain">


        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 col-xs-12 login-container bg-main d-flex flex-column p-4 rounded">
                <div class="login-title">
                    <h1 class="headline">Đăng nhập</h1>
                </div>
                <form action="" method="POST" class="p-5 form-row">
                    <div class="form-group my-4 col-12">
                        <label for="username" class="subheadline">Tên tài khoản</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-card border-0">
                                    <i class="fal fa-user subheadline font-weight-bold" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input autocomplete="off" type="text" name="username" id="username" class="form-control form-control-lg bg-card no-border rounded subheadline" placeholder="Nhập tên tài khoản">
                        </div>
                        <span class="form-text user-err-message text-white pl-2">
                            <?php echo $username_error; ?>
                        </span>
                    </div>
                    <div class="form-group col-xs-12 col-md-12 col-lg-6 col-xl-6 mt-4 ">
                        <label for="password" class="subheadline">Mật khẩu </label>
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <div class="input-group-text bg-card border-0">
                                    <i class="fal fa-lock subheadline font-weight-bold" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="password" autocomplete="off" name="password" id="password" class="form-control form-control-lg bg-card no-border rounded subheadline" placeholder="Nhập mật khẩu">
                        </div>
                        <span class="form-text password-err-message text-white pl-2">
                            <?php echo $password_error; ?>
                        </span>
                    </div>
                    <div class="form-group col-xs-12 col-md-12 col-lg-6 col-xl-6 mt-4  re-password">
                        <label for="re-password" class="subheadline"> Nhập lại mật khẩu</label>
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <div class="input-group-text bg-card border-0">
                                    <i class="fal fa-lock subheadline font-weight-bold" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="password" autocomplete="off" name="re-password" id="rePassword" class="form-control form-control-lg bg-card no-border rounded subheadline" placeholder="Nhập lại mật khẩu">
                        </div>
                        <span class="form-text password-err-message text-white pl-2">
                            <?php echo $password_error; ?>
                        </span>
                    </div>
                    <div class="form-group mt-4  col-12 email-input">
                        <label for="email" class="subheadline"> Địa chỉ email </label>
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <div class="input-group-text bg-card border-0">
                                    <i class="fal fa-lock subheadline font-weight-bold" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="email" name="email" id="email" autocomplete="off" class="form-control form-control-lg bg-card no-border rounded subheadline" placeholder="Nhập địa chỉ email">
                        </div>
                        <span class="form-text password-err-message text-white pl-2">
                            <?php echo $password_error; ?>
                        </span>
                    </div>
                    <div class="form-group mt-4 col-12  phone-input">
                        <label for="phone" class="subheadline"> Số điện thoại </label>
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <div class="input-group-text bg-card border-0">
                                    <i class="fal fa-lock subheadline font-weight-bold" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input autocomplete="off" type="number" name="phone" id="phone" class="form-control form-control-lg bg-card no-border rounded subheadline" placeholder="Nhập số điện thoại">

                        </div>
                        <span class="form-text password-err-message text-white pl-2">
                            <?php echo $password_error; ?>
                        </span>
                    </div>
                    <div class="w-100 d-flex justify-content-center div-btn-submit-container">
                        <button type="submit" class="btn bg-button headline p-2 mt-3">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>


    </div>





</body>

</html>