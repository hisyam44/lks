<?php
	include "Classes/Database.php";
	$database = new Database();
	$data = [];
	$data['title'] = "Lorem Ipsum";
	$data['content'] = "Losad jshd ASFNAS a sfjaksbf aksjfb";
	$data['excerpt'] = "sad";
	$data['published_at'] = date("Y-m-d H:i:s");
	print_r($database->update("articles",$data,"id = 1"));
?>