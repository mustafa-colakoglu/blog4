<?php
	$databases=array(
		"db1" => array(
			"db" =>"mysql",//mysql
			"extension"=>"pdo",//mysql,pdo
			"host"=>"localhost",
			"port"=>false,
			"user"=>"root",
			"password"=>"",
			"database"=>"blog"
		)
	);
	$siteInfo = array(
		"host" => "http://localhost/blog/blog4",
		"welcomeController" => "anasayfa"
	);
	//$defaultDb="db1";
?>