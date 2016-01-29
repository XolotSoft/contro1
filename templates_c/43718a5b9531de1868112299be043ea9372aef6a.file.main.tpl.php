<?php /* Smarty version Smarty3-b7, created on 2016-01-28 09:49:05
         compiled from "/var/www//controlobra_1/templates/menus/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105545120456aa38717babf0-19850682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43718a5b9531de1868112299be043ea9372aef6a' => 
    array (
      0 => '/var/www//controlobra_1/templates/menus/main.tpl',
      1 => 1453996143,
    ),
  ),
  'nocache_hash' => '105545120456aa38717babf0-19850682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <li class="sidebar-toggler-wrapper hide">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler"> </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
    </li>
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
        <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
            <a href="javascript:;" class="remove">
                <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="heading">
        <h3 class="uppercase">Secciones</h3>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('page')->value=="personal"){?>nav-item  active open<?php }else{ ?>nav-item <?php }?>">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-diamond"></i>
            <span class="title">Catalogos</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php if ($_smarty_tpl->getVariable('page')->value=="personal"){?>class="active"<?php }?> class="nav-item  ">
                <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/personal" class="nav-link ">
                    <span class="title">Usuarios</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-cup"></i>
            <span class="title">Materiales</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-puzzle"></i>
            <span class="title">Conceptos</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-drawer"></i>
            <span class="title">Proyectos</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-envelope-open"></i>
            <span class="title">Cuantificación</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-ghost"></i>
            <span class="title">Estimaciones</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-crop"></i>
            <span class="title">Requisiciones</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
   <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-wallet"></i>
            <span class="title">Contratos</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item  ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-briefcase"></i>
            <span class="title">Resumenes</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="ui_colors.html" class="nav-link ">
                    <span class="title">Color Library</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="ui_general.html" class="nav-link ">
                    <span class="title">General Components</span>
                </a>
            </li>
        </ul>
    </li>
</ul>