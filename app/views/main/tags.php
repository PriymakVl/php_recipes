
<section class="tags-wrapper">

<?php
    foreach($tags as $tag) {
        $count_recipes = Tag::getRecipes($tag['id']);
        if($count_recipes){
            echo "<!-- single tag -->";
            echo "<a href='/main/tag?tag_id={$tag['id']}' class='tag'>";
            printf('<h5>%s</h5><p>%s recipe</p>', $tag['name'], count($count_recipes));
            echo "</a>";
            echo "<!-- end of single tag -->";
        }
    }    
?>
</section>