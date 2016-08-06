<?php
	spl_autoload_register(function ($class){
		include "Classes/".$class.".php";
	});
	$database = new Database();
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Title</title>
</head>
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<body>
<div class="container">
	<div style="margin-top:50px;"></div>
	<div class="row">
		<div class="col-9">
			<div class="panel">
				<div class="panel-header">Articles</div>
				<div class="panel-body">
					<?php
						if(isset($_GET['page'])){
							if($_GET['page'] == "create"){
								include "php/create.php";
							}
						}elseif(isset($_GET['article'])){
								$article = $database->select("*","articles","where id = ".$_GET['article']);
								$article = $article[0];
								?>
									<div class="box">
										<div class="title"><?php echo $article['title']; ?></div>
										<div class="published_at">Publish On <?php echo $article['published_at']; ?></div>
										<div class="image">
											<img src="<?php echo $article['photo']; ?>">
										</div>
										<div class="content"><?php echo $article['content']; ?></div>
									</div>
								<?php
						}else{
							$articles = $database->select("*","articles","order by id desc");
							foreach ($articles as $article) {
								?>
								<div class="article">
									<div class="title"><?php echo $article['title']; ?></div>
									<div class="row">
									<div class="col-4">
										<div class="image">
											<img src="<?php echo $article['photo']; ?>">
										</div>	
									</div>
									<div class="col-8">
										<div class="excerpt"><?php echo $article['excerpt']; ?><a href="index.php?article=<?php echo $article['id']; ?>">Baca Selengkapnya...</a></div>				
									</div>
									</div>
								</div>
								<?php
							}
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-3">
		</div>
	</div>
</div>
</body>
</html>