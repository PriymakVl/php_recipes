<div class="recipe-page">
    <section class="recipe-hero">
        <img
        src="/assets/img/recipes/<?= $recipe['img'] ?>"
        class="img recipe-hero-img"
        />
        <article class="recipe-info">
        <h2><?= $recipe['name'] ?></h2>
        <p>
            <?= $recipe['description'] ?>
        </p>
        <div class="recipe-icons">
            <article>
            <i class="fas fa-clock"></i>
            <h5>prep time</h5>
            <p><?= $recipe['prep'] ?> min.</p>
            </article>
            <article>
            <i class="far fa-clock"></i>
            <h5>cook time</h5>
            <p><?= $recipe['cook'] ?> min.</p>
            </article>
            <article>
            <i class="fas fa-user-friends"></i>
            <h5>serving</h5>
            <p><?= $recipe['serv'] ?> servings</p>
            </article>
        </div>
        <p class="recipe-tags">
            Tags :
            <? foreach($tags as $tag): ?>
            <a href="/main/tag?tag_id=<?=$tag['id']?>"><?= $tag['name'] ?></a>
            <? endforeach; ?>
        </p>
        </article>
    </section>
    <!-- content -->
    <section class="recipe-content">

        <? include "_instructions.php"?>

        <article class="second-column">

        <? include "_ingredients.php" ?>    

        <? include "_tools.php" ?>

        </article>
    </section>
</div>