<?php
	$databases=array(
		"db1" => array(
			"databaseType" =>"mysql",//mysql
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
	$benchmark = true;
	//$defaultDb="db1";
?>