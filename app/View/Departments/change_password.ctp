<div class="login">
    <div class="login-box">
        <div class="login-logo">
            <img src="../img/common/plmun-logo.png" alt="plmun logo">
        </div>
        <?php echo $this->Session->flash(); ?>
        <form class="form" method="POST">
            <ul class="login-form">
                <li class="login-row">
                    <label class="login-label">PASSWORD</label>
                    <input class="login-input" type="password" placeholder="********" name="password">
                </li>
                <li class="login-row">
                    <label class="login-label">PASSWORD CONFIRM</label>
                    <input class="login-input" type="password" placeholder="********" name="confirm_password">
                </li>
                <li class="login-row">
                    <button type="submit" class="login-button">SUBMIT</button>
                </li>
            </ul>
        </form>
    </div>
</div>