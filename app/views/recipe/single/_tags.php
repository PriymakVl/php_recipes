<?php
$count = 1;
?>

<div class="tab-pane fade" id="tags">
        <h2 class="text-center">Recipe tags</h2>
        <a href="#" class="btn btn-primary mb-3" role="button">Add Tag</a>
        <? if($tags): ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <? foreach($tags as $tag): ?>
                    <tr>
                        <th scope="row"><?= $count++ ?></th>
                        <td><?= $tag['name'] ?></td>
                        <td>
                            <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <? endforeach; ?>
                </tbody>
            </table>
        <? else: ?>
            <p> Тегов нет</p>
        <? endif; ?>
    </div>