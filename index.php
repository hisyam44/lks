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
		<div class="col-6">
			<div class="panel">
				<div class="panel-header">Articles</div>
				<div class="panel-body">
					<?php
						/*$articles = $database->select("*","articles","order by id desc");
						foreach ($articles as $article) {
							echo "<div>".$article['title']."</div>";
							echo "<div>".$article['excerpt']."</div>";
							echo "<div>".$article['published_at']."</div>";
						}*/
					?>
					<div class="row">
						<div class="form">
							<form>
								<div class="input">
									<label class="form-label">Title</label>
									<input class="form-control"></input>
								</div>
								<div class="input">
									<label class="form-label">Excerpt</label>
									<input class="form-control"></input>
								</div>
								<div class="input">
									<label class="form-label">Content</label>
									<textarea class="form-control"></textarea>
								</div>
								<div class="input">
									<input class="form-control blue" type="submit" value="POST"></input>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="panel">
				<div class="panel-header">Article</div>
				<div class="panel-body">content</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>