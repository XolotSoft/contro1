<?php

    session_start();
    
    if($_SERVER['HTTP_HOST'] == 'localhost'){
        $docRoot = $_SERVER['DOCUMENT_ROOT'].'/controlobra_1';
        define('DOC_ROOT', $docRoot);
        define('WEB_ROOT', 'http://localhost/controlobra_1'); 
        if($_SESSION['curBD'] == 'Demo'){   
            define('SQL_HOST', '192.168.1.200');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', 'root');
            define('BCK_DIR', 'backups2');          
        } else {
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra2');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', '123');
            define('BCK_DIR', 'backups');
        }
    
    }elseif($_SERVER['HTTP_HOST'] == '192.168.1.200' || $_SERVER['HTTP_HOST'] == 'desarrollot.no-ip.biz'){  
    
        define('DOC_ROOT', '/var/www/html/controlobra/');
        define('WEB_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/controlobra'); 
        
        if($_SESSION['curBD'] == 'Demo'){   
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', 'root');
            define('BCK_DIR', 'backups2');          
        }else{      
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', 'root');
            define('BCK_DIR', 'backups');           
        }
        
    }elseif($_SERVER['HTTP_HOST'] == '52.7.45.195'){    
    
        define('DOC_ROOT', '/var/www/html/controlobra/');
        define('WEB_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/controlobra'); 
        
        if($_SESSION['curBD'] == 'Demo'){   
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', 'admonavanti');
            define('BCK_DIR', 'backups2');          
        }else{      
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'root');
            define('SQL_PASSWORD', 'admonavanti');
            define('BCK_DIR', 'backups');           
        }
        
    }else{
    
        define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'].'/controlobra/');
        define('WEB_ROOT', '');
        
        if($_SESSION['curBD'] == 'Demo'){   
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'aleaarquit_sis');
            define('SQL_PASSWORD', 'sistema2012');
            define('BCK_DIR', 'backups2');          
        }else{      
            define('SQL_HOST', 'localhost');
            define('SQL_DATABASE', 'controlobra');
            define('SQL_USER', 'aleaarquit_sis2');
            define('SQL_PASSWORD', 'sis2');
            define('BCK_DIR', 'backups');           
        }
        
    }//else
    
    define('ITEMS_PER_PAGE', '20');
    define('SALT', 'C5o4n9t3r4o');


?>
