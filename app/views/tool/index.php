<?php
$count = 1;
?>

<div class="container">
	<h1 class="text-center">Tools</h1>
	<a href="/tool/add" class="btn btn-primary mb-3" role="button">Add Tool</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
            <th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
            <?foreach($tools as $tool): ?>
            <tr>
                <th scope="row"><?= $count++ ?></th>
                <td>
                    <?= $tool['name'] ?>	
                </td>
                <td>
                    <a href="#" class="btn-sm btn-danger tool-delete" tool_id="<?= $tool['id'] ?>">Delete</a>
                    <a href="/tool/edit?id=<?= $tool['id'] ?>" class="btn-sm btn-primary">Edit</a>
                </td>
            </tr>
            <?endforeach?>
		</tbody>
	</table>
</div>