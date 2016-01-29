<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    {include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
    {include file="{$DOC_ROOT}/templates/2-default-css.tpl"}       
</head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        {include file="{$DOC_ROOT}/templates/header.tpl"}
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    {include file="{$DOC_ROOT}/templates/menus/main.tpl"}
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    {include file="{$DOC_ROOT}/templates/{$page}.tpl"}      
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        {include file="{$DOC_ROOT}/templates/footer.tpl"}
        {include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
        <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init(); // initlayout and core plugins
        });
    </script>
    </body>

</html>