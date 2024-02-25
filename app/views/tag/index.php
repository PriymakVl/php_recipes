<?php
$count = 1;
?>

<div class="container">
	<h1 class="text-center">Tags</h1>
	<a href="/tag/add" class="btn btn-primary mb-3" role="button">Add Tag</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
            <th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
            <?foreach($tags as $tag): ?>
            <tr>
                <th scope="row"><?= $count++ ?></th>
                <td>
                    <?= $tag['name'] ?>	
                </td>
                <td>
                    <a href="#" class="btn-sm btn-danger tag-delete" tag_id="<?= $tag['id'] ?>">Delete</a>
                    <a href="/tag/edit?id=<?= $tag['id'] ?>" class="btn-sm btn-primary">Edit</a>
                </td>
            </tr>
            <?endforeach?>
		</tbody>
	</table>
</div>