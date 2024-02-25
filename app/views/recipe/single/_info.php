<div class="tab-pane fade show active" id="info">
        <h2 class="text-center">Info</h2>
        <a href="/recipe/edit?id=<?= $recipe['id'] ?>" class="btn btn-primary mb-3" role="button">Edit recipe</a>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Name</th>
                    <td><?= $recipe['name'] ?></td>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Description</th>
                    <td><?= $recipe['description'] ?></td>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Image</th>
                    <td>
                        <img src="/assets/img/recipes/<?= $recipe['img'] ?>" alt="<?= $recipe['name'] ?>" height="100px">
                    </td>
                </tr>
                <tr>
                    <th>4</th>
                    <th>Prep time</th>
                    <td><?= $recipe['prep'] ?> min</td>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Cook time</th>
                    <td><?= $recipe['cook'] ?> min</td>
                </tr>
                <tr>
                    <th>6</th>
                    <th>Serving</th>
                    <td><?= $recipe['serv'] ?> servings</td>
                </tr>
            </tbody>
        </table>
    </div>