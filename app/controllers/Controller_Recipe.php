<?php

class Controller_Recipe extends Controller_Base
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        View::admin("recipe/index", ["recipes" => $recipes]);
    }

    public function action_add()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                $recipe_id = Recipe::add($_POST);
                $this->addMessage("add_recipe", "ok")->redirect("/recipe/single", ["id" => $recipe_id]);
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/recipe/add");
            }
        }
        else {
            View::admin("recipe/add");
        }
    }

    public function action_single() 
    {
        $recipe = Recipe::findOne($_GET['id']);
        $tags = Recipe::getTags($_GET['id']);
        debug($tags);
        View::admin("recipe/single/index", ['recipe' => $recipe, 'tags' => $tags] );
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                $recipe_id = Recipe::edit($_POST);
                $this->addMessage("edit_recipe", "ok")->redirect("/recipe/single", ["id" => $_POST['id']]);
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/recipe/edit", ["id" => $_POST['id']]);
            }
        }
        else {
            $recipe = Recipe::findOne($_GET['id']);
            View::admin("recipe/edit", ['recipe' => $recipe]);
        }
    } 

    public function action_delete()
    {
        $result = Recipe::delete($_GET['id']); 
        $result ?  $this->addMessage("delete_recipe", "ok") : $this->addMessage("delete_recipe", "error");
        $this->redirect("/recipe/index");
    }
}