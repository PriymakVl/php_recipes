<?php

class Controller_Main extends Controller_Base 
{
    public function action_index() 
    {
        $recipes = Recipe::findAll();
        $tags = Tag::getAllWithCountRecipes();
        $this->render("main/index", ["recipes" => $recipes, "tags" => $tags]);
    }

    public function action_recipe()
    {
        $recipe = Recipe::findOne($_GET['recipe_id']);
        $tags = Recipe::getTags($_GET['recipe_id']);
        $this->render("main/recipe/index", ["recipe" => $recipe, "tags" => $tags]);
    }

    public function action_tags()
    {
        $tags = Tag::getAllWithCountRecipes();
        $this->render("main/tags", ["tags" => $tags]);
    }

    public function action_recipes()
    {
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();
        $this->render("main/recipes", ["recipes" => $recipes, "tags" => $tags]);
    }

    public function action_tag()
    {
        $tag = Tag::findOne($_GET['tag_id']);
        $recipes = Tag::getRecipes($tag['id']);
        $this->render("main/tag", ["recipes" => $recipes, "tag" => $tag]);
    }
    
   
}