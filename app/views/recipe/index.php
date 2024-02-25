<?php
$count = 1;
?>

<div class="container">
	<h1 class="text-center">Recipes</h1>
	<a href="/recipe/add" class="btn btn-primary mb-3" role="button">Add recipe</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
			<th scope="col">Prep time</th>
			<th scope="col">Cook time</th>
			<th scope="col">Serving</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
            <?foreach($recipes as $recipe): ?>
            <tr>
                <th scope="row"><?= $count++ ?></th>
                <td>
                    <a href="/recipe/single?id=<?= $recipe['id'] ?>"><?= $recipe['name'] ?></a>	
                </td>
                <td><img src="../assets/img/recipes/<?= $recipe['img'] ?>" height="100px"></td>
                <td><?= $recipe['prep'] ?> min</td>
                <td><?= $recipe['cook'] ?> min</td>
                <td><?= $recipe['serv'] ?> servings</td>
                <td>
                    <a href="#" class="btn-sm btn-danger delete-recipe" recipe_id="<?= $recipe['id'] ?>">Delete</a>
                    <a href="/recipe/edit?id=<?= $recipe['id'] ?>" class="btn-sm btn-primary">Edit</a>
                </td>
            </tr>
            <?endforeach?>
		</tbody>
	</table>
</div>