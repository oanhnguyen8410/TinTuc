<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="title-login-form">Đăng nhập</div>
                        </div>
                        <div class="modal-body">
                            <div class="login-form">
                                <form>
                                    <label>Tên đăng nhập *</label>
                                    <input name="username" type="text" placeholder="Tên đăng nhập" />
                                    <label>Mật khẩu *</label>
                                    <input name="password" type="password" placeholder="Mật khẩu" />
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox" type="checkbox" checked>
                                        <label for="checkbox">Nhớ mật khẩu</label>
                                    </div>
                                    <button type="submit" value="Login">Đăng nhập</button>
                                    <button class="form-cancel" type="submit" value="">Hủy</button>
                                    <label class="lost-password">
                                        <a href="#">Quên mật khẩu?</a>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>