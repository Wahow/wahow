<?php 

		//預設語系
		define("__LANG",'zh_TW');
		//define("__LANG",'zh_CN');
		//define("__LANG",'EN');

		//預設首頁
		define("__DEFAULT",'index');
		
		
        //控制器名稱,index or index.php
        $controller='index.php';		
        
//echo $_SERVER[HTTP_HOST];
	
		//網站開發模式:
        switch($_SERVER[HTTP_HOST]):
			case'app5-biguang.no-ip.org':$Mode='test';break; //home dev host
            
			case'app5.shang-yi.tsi.iproducts.com.tw':$Mode='dev';break; //allporudcts dev host
			default:$Mode='prod';// allproducts prod host
        endswitch;
		
//echo $Mode;

$Mode="dev";		

		
		
		
        switch ($Mode):
			case 'dev'://.12
            case 'test'://3918
            case 'prod':
            	define("__MODE",$Mode);
            	include_once __CONFIG.'/mode_'.$Mode.'.php';
			break;		
		endswitch;
//echo __CONFIG.'/mode_'.$Mode.'.php';

?>
