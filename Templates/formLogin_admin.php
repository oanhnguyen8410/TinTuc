<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập-ADMIN</title>
    <link rel="shortcut icon" type="ico" href="View/thanthu/assets/images/frame1/favicon-head.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="Public/admin/plugins/fontawesome-free/css/all.min.css">
</head>
<body>
    <style type="text/css">
      
        body {
            background-color: #2196F3;

        }
        form {
            width: 35%;
            margin-left: 32%;
            margin-top: 13%;
            border-radius: 10px;
        }
        button {
            margin-bottom: 5%;
            border-radius: 6px;
        }
        .w3-btn:hover {
            box-shadow: none;
            filter: brightness(110%);
        }
        i {
            font-size: 30px;
            margin-top: 20px;
            /*margin-left: 47%;*/
        }
        h2 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 10px;
            margin-top: 0px;
        }
        label {
            line-height: 2.5;

        }
    </style>
    <?php
        // session_start();

        if(isset($_SESSION['admin_user']) && $_SESSION['admin_user'] != NULL){
            unset($_SESSION['admin_user']);
            echo "<script>alert('Đăng xuất thành công')</script>";
        }

        ?>

        
            <form class="w3-container w3-card-4 w3-light-grey" method="POST" action="?controller=loginadmin&action=loginadmin">
            <center>
                <i class="fa fa-user" aria-hidden="true"></i> 
              <h2>ADMIN</h2>
          </center>
              <label>Tên đăng nhập *</label>
              <input class="w3-input w3-border w3-round" name="admin_user" type="text"></p>
              <p>
              <label>Mật khẩu *</label>
              <input class="w3-input w3-border w3-round-large" name="password" type="password"></p>
              <center>
                <button type="submit" name="login_admin" value="Login" class="w3-btn w3-blue">Đăng nhập</button>
            </center>
            </form>
 

</body>
</html>
