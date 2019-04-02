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
                    <select class="login-input" name="data[User][username]">
                        <option value="citcs">CITCS-SEC</option>
                        <option value="cas">CAS-SEC</option>
                        <option value="cba">CBA-SEC</option>
                        <option value="cte">CTE-SEC</option>
                        <option value="ccj">CCJ-SEC</option>
                        <option value="offices">OFFICES-SEC</option>
                    </select>
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