
<div class="featured-recipes">
    <h4><?= $tag['name'] ?></h4>
        <!-- recipes list -->
    <div class="recipes-list">
        <? foreach($recipes as $recipe): ?>
        <!-- single recipe -->
        <a href="/main/single?id=<?= $recipe['id'] ?>" class="recipe">
        <img
            src="/assets/img/recipes/<?= $recipe['img'] ?>"
            class="img recipe-img"
            alt=""
        />
        <h5><?= $recipe['name'] ?></h5>
        <p>Prep : <?= $recipe['prep'] ?>min | Cook : <?= $recipe['Cook'] ?>min</p>
        </a>
        <!-- end of single recipe -->
        <? endforeach; ?>
    </div>
    <!-- end of recipe list -->
</div>


