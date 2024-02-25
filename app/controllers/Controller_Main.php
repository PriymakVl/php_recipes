<?php

class Controller_Main extends Controller_Base 
{
    public function action_index() 
    {
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();
        View::render("main/index", ["recipes" => $recipes, "tags" => $tags]);
    }

    public function action_single()
    {
        $recipe = Recipe::findOne($_GET['id']);
        $tags = Recipe::getTags($_GET['id']);
        View::render("main/single/index", ["recipe" => $recipe, "tags" => $tags]);
    }

    public function action_tags()
    {
        $tags = Tag::findAll();
        View::render("main/tags", ["tags" => $tags]);
    }

    public function action_recipes()
    {
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();
        View::render("main/recipes", ["recipes" => $recipes, "tags" => $tags]);
    }

    public function action_tag()
    {
        $tag = Tag::findOne($_GET['tag_id']);
        $recipes = Tag::getRecipes($tag['id']);
        View::render("main/tag", ["recipes" => $recipes, "tag" => $tag]);
    }
    
    
}