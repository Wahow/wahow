<?php 

//add test
        session_start();
        
       $_SESSION['ckfinder']='ckfinder';
        
        date_default_timezone_set('Asia/Taipei');
        
	    header("Content-Type: text/html; charset=UTF-8");
	    

		define('__ROOT',$_SERVER[DOCUMENT_ROOT]);
		//echo __ROOT;
		
//		define('__DOMAIN','http://a001sec.demo.iproducts.com.tw' );
		//客戶網址  
		define('__DOMAIN','http://'.$_SERVER[SERVER_NAME] );
		//echo __DOMAIN;
		//**客戶資訊
		 define("__COMPANY","台北好車");
		
		
		//模版版本
		define('__VERSSION','D003');
		//lib
		define('__LIB',__ROOT.'lib');
				
		//db
		define('__DB',__ROOT.'db');	

		//tmp
		define('__TMP',__ROOT.'tmp');			
		
		//config
		define('__CONFIG',__ROOT.'config');

		//res
		define('__WEB_RES','/web/res');
		
		define('__ROOT_RES',__ROOT.'web/res');

		//upload
		define('__WEB_UPLOAD','/upload');		
		
		define('__ROOT_UPLOAD',__ROOT.'/upload');
                
                define('__RL',__WEB_RES.'/lib');//web/res/lib

		//JQ
		define('__JQ','/res/lib/jquery/plugins');			
		
                //plugins
                define('__PLUGINS','web/res/lib/jquery/plugins');
                
		//錯誤導向頁面
		define('__ERROR_IDENTITY','app/errorIdentity');

		//登入頁面
		define('__LOGIN','app/login');		
		
		//登入成功導向
		define('__LOGIN_SUCESS','app/welcome');
		



        //root管理者帳號密碼
         define('__ROOT_USER','allproducts');
        define('__ROOT_PASSWORD','27892000');
        define('__ROOT_EMAIL','kevin3918@tradeserv.com');
        define('__ROOT_MOBILE','');
        define('__ROOT_NAME','亞普達');
        define('__ROOT_GROUP','亞普達有限公司');
		define('__ROOT_LOGIN_SUCESS','app/welcome');		//登入成功導向			

		//客戶logo
		//define('__CUSTOMER_LOGO', '<img src="/res/zh_TW/images/problem2.JPG" width="150px"/>');
define('__CUSTOMER_LOGO', '<h3><a href="http://'.__DOMAIN.'" target="_blank">ixd</a></h2>');
				
        //控制器名稱
		define("__INDEX",'index.php');	
		
		include_once __CONFIG.'/config.php';
		
		include_once __CONFIG.'/lang.php';		
		
        include_once __PLUGIN.'/lib/system/system.php';		
		
		include_once __LIB.'/core/class.php';

		include_once __LIB.'/core/func.php';	
		
		include_once __CONFIG.'/module.php';		

		include_once __PLUGIN.'/lib/PHPMailer/kMail.php';
                
		//include_once __PLUGIN.'/lib/tcpdf/tcpdf.php';	
		
		
		//global $ProductCatagory; 
		define('__ProductCatagory',3);//產品層數
		define('__UseCart',1);//使用:購物車1 詢問車0 
		define('__ProductAmount',500);//產品總數

		

?>
