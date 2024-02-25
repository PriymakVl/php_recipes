
<section class="recipes-container">
<!-- tag container -->
<div class="tags-container">
    <h4>recipes</h4>
    <div class="tags-list">
    <?foreach($tags as $tag): ?>
    <a href="tag-template.html"><?=$tag['name']?> (1)</a>
    <?endforeach?>
    </div>
</div>
<!-- end of tag container -->
<!-- recipes list -->
<div class="recipes-list">
    <?foreach($recipes as $recipe): ?>
    <!-- single recipe -->
    <a href="single-recipe.html" class="recipe">
    <img
        src="/assets/img/recipes/<?= $recipe['img']?>"
        class="img recipe-img"
        alt=""
    />
    <h5><?=$recipe['name'] ?></h5>
    <p>Prep : <?=$recipe['prep']?>min | Cook : <?=$recipe['cook']?>min</p>
    </a>
    <!-- end of single recipe -->
    <?endforeach?>
</div>
</section>