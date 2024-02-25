<div class="container">
	<h1 class="text-center">Edit tag form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form method="POST" action="/tag/edit">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="<?= $tag['name'] ?>">
                    <input type="hidden" name="id" value="<?= $tag['id'] ?>">
				</div>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>
		</div>
	</div>
</div>