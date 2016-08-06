	<div class="row">
		<div class="form">
			<form method="post" action="php/post_article.php" enctype="multipart/form-data">
				<div class="input">
					<label class="form-label">Title</label>
					<input class="form-control" name="title"></input>
				</div>
				<div class="input">
					<label class="form-label">Excerpt</label>
					<input class="form-control" name="excerpt"></input>
				</div>
				<div class="input">
					<label class="form-label">Content</label>
					<textarea class="form-control" rows="4" name="content"></textarea>
				</div>
				<div class="input">
					<label class="form-label">Photo</label>
					<input class="form-control" type="file" name="photo" accept="image/*"></input>
				</div>
				<div class="input">
					<label class="form-label">Publish On</label>
					<input class="form-control" type="date" name="published_at"></input>
				</div>
				<div class="input">
					<input class="form-control blue" type="submit" value="POST"></input>
				</div>
			</form>
		</div>
	</div>