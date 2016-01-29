<?php /* Smarty version Smarty3-b7, created on 2016-01-27 15:57:40
         compiled from "/var/www//controlobra_1/templates/forms/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99048446456a93d5444a001-86317901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16dd59150f2d4970dc74e3219c627f928c203716' => 
    array (
      0 => '/var/www//controlobra_1/templates/forms/login.tpl',
      1 => 1453931858,
    ),
  ),
  'nocache_hash' => '99048446456a93d5444a001-86317901',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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