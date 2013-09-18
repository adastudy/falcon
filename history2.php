<?php
/**
* Falcon-Web Server File Monitoring Program Under Linux Environment
* Copyright (C) 2012 Secrule.com
* 
* Licensed under the terms of the GNU General Public License:
* http://www.opensource.org/licenses/gpl-license.php
* @license  GPLv3
*  
* @version  0.1
* @author   
* @modify   2012/5/28, @VinDong
 */
session_start();
ob_start();
$sid = session_id();
if(isset($_SESSION['username']) && ($_SESSION['username']==$sid)){
require_once('base.php');
include('vemplator.php');
include('html/top.html');
include('html/left.html'); 
include('html/index.html');

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die ("数据库连接失败");
 $t = new vemplator();
 ?>
<div class="main">
    	<div class="main_top"></div>
		<div id="main">
<?php
}else{
		header("Location: login.php");
}
?>
</div>
 <div class="main_bottom"></div>
	</div>
<script type="text/javascript">
function showdiv(id){
	var dd=document.getElementById(id);
	if(dd.style.display=='none'){
		dd.style.display='';
	}else{
		dd.style.display='none';
	}
}
window.onload=function(){
	try{
		var HH;
		if(document.getElementById("main").clientHeight == 0){
			HH=document.getElementById("main").offsetHeight;
		}else{
			HH=document.getElementById("main").clientHeight;
		}
		if(HH<document.getElementById("menu").clientHeight){
			document.getElementById("main").style.height=document.getElementById("menu").offsetHeight-26+"px";
		}
	}catch(e){
	}
}
</script>
<?php
include "footer.php" ;
?>
</body>
</html>
