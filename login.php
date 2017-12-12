<?php
	<!-- 
	      login.php
	      <project>
	      
	      Created by Administrator on 2017-12-12.
	      Copyright 2017 Administrator. All rights reserved.
	 -->
	header("Access-Control-Allow-Origin:*");
	if($_GIT["user"] && $_GIT["pass"]){
		$user=$_GIT["user"];
		$pass=$_GIT["pass"];
		if($user=="admin" && $pass=="abc"){
			echo 1;
		}else{
			echo 0;
		}
	}
?>