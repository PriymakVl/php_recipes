<!-- header -->
<header class="hero">
<div class="hero-container">
    <div class="hero-text">
    <h1>simply recipes</h1>
    <h4>no fluff, just recipes</h4>
    </div>
</div>
</header>
<!-- end of header -->
<section class="recipes-container">
<!-- tag container -->
<div class="tags-container">
    <h4>recipes</h4>
    <div class="tags-list">
        <?php
        foreach($tags as $tag) {
                printf('<a href="/main/tag?tag_id=%s">%s (%s)</a>', $tag['id'], $tag['name'], $tag['count_recipes']);
        }
        ?>
    </div>
</div>
<!-- end of tag container -->
<!-- recipes list -->
<div class="recipes-list">
    <? foreach($recipes as $recipe): ?>
    <!-- single recipe -->
    <a href="main/single?id=<?= $recipe['id'] ?>" class="recipe">
    <img
        src="/assets/img/recipes/<?= $recipe['img'] ?>"
        class="img recipe-img"
        alt=""
    />
    <h5><?= $recipe['name'] ?></h5>
    <p>Prep : <?= $recipe['prep'] ?>min | Cook : <?= $recipe['cook'] ?>min</p>
    </a>
    <!-- end of single recipe -->
    <? endforeach; ?>
</div>
<!-- end of recipes list -->
</section>