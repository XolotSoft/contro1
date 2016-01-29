<form class="form-vertical login-form" id="frmLogin">
    <input type="hidden" name="type" value="doLogin">
    <h3 class="form-title" style="color:#07AEAF;">Iniciar sesi&oacute;n</h3>
    <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="Username" value="" name="username"/></div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="Password" name="password"/></div>
</form>
    <div class="form-actions" align="right">
        <button class="btn blue uppercase" style="background-color: #32c5d2;border-color: #32c5d2;color: #fff;" onClick="DoLogin()">Login</button>
    </div>