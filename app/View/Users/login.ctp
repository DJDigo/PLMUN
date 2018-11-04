<div class="login">
    <div class="login-box">
        <div class="login-logo">
            <img src="../img/common/plmun-logo.png" alt="plmun logo">
        </div>
        <?php echo $this->Session->flash(); ?>
        <form class="form" method="POST">
            <ul class="login-form">
                <li class="login-row">
                    <label class="login-label">USERNAME</label>
                    <input class="login-input" type="text" placeholder="username" name="data[User][username]">
                </li>
                <li class="login-row">
                    <label class="login-label">Password</label>
                    <input class="login-input" type="password" placeholder="********" name="data[User][password]">
                </li>
                <li class="login-row">
                    <button type="submit" class="login-button">LOGIN</button>
                </li>
            </ul>
        </form>
    </div>
</div>