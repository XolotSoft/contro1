<?php /* Smarty version Smarty3-b7, created on 2016-01-27 13:07:00
         compiled from "/var/www//controlobra_1/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192732435956a915549c02f1-07086980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58bd0b74880c3a5bc45f3f2ff4d57ea2920b58db' => 
    array (
      0 => '/var/www//controlobra_1/templates/footer.tpl',
      1 => 1453921593,
    ),
  ),
  'nocache_hash' => '192732435956a915549c02f1-07086980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('page')->value=="login"){?>
   <div class="copyright">
       <a href="http://www.avantika.com.mx"         target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/pwa.png" alt="AVANTIKA" style="height:85px;padding-top:10px;"></a>
   </div>
<?php }else{ ?>
   <div class="footer">
       <div class="footer-inner">
           <a href="http://www.avantika.com.mx" style="text-decoration:none;" target="_blank">powered by <b>AVANTIKA </b><img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/images/logoavantika.png" alt="" style="height:22px;"></a>
       </div>
       <div class="footer-tools">
           <span class="go-top">
           <i class="fa fa-angle-up"></i>
           </span>
       </div>
   </div>
<?php }?>