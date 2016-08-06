<?php
	include "../Classes/Database.php";
	$database = new Database();
	if(isset($_POST)){
		if($_FILES){
			$extension = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
			$destination = "images/".rand(111111,999999).".".$extension;
			$upload = move_uploaded_file($_FILES['photo']['tmp_name'], "../".$destination);
		}
		$data = $_POST;
		$data['photo'] = $destination;
		$article = $database->insert("articles",$data);
		if($article){
			header("location:../");
		}
	}

?>