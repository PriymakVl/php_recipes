<div class="container mt-3">
    <h1 class="text-center"><?= $recipe['name'] ?></h1>
    <!-- nav -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#info">Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tags">Tags</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tools">Tools</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ingredients">Ingredients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#instructions">Instructions</a>
        </li>
    </ul>
    
    <!-- content -->
    <div class="tab-content mt-3">
        <!-- info -->
    <? include "_info.php" ?>
        <!-- tags -->
    <? include "_tags.php" ?>
        <!-- tools -->
    <? include "_tools.php" ?>
        <!-- ingredients -->
    <? include "_ingredients.php" ?>
        <!-- instructions -->
    <? include "_instructions.php" ?>

    </div>
</div>