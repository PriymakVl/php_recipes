<?php

class Tag extends Model 
{
    public static function getTable() 
    {
        return 'tags';
    }

    public static function add($data) 
    {
        $table = self::getTable(); 
        $sql = "INSERT INTO `$table`(`name`) VALUES (:name)"; 
        self::execute($sql, $data, 'add_tag');
    }

    public static function edit($data) 
    {  
        $result = self::updateColumn('name', $data['name'], $data['id']);
        if($result === false){
            throw new Exception('edit_tag');
        }
        // $sql = "UPDATE `$table` SET `name`= :name,`description`= :description,`prep`= :prep,`cook`= :cook, `serv` = :serv WHERE `id` = :id";
        // return self::execute($sql, $data, 'edit_recipe');
    }

    public static function getRecipes($tag_id)
    {
        $recipes_ids = RecipeTag::getRecipes($tag_id);
        return Recipe::findMany($recipes_ids);
    }

    public static function findAll()
    {
        $tagsWithRecipes = [];
        $tags = parent::findAll();
        for ($i = 0; $i < count($tags); $i++) {
            $recipes = RecipeTag::getRecipes($tags[$i]['id']);
            if (!$recipes) continue;
            $tags[$i]['count_recipes'] = count($recipes);
            $tagsWithRecipes[] = $tags[$i];
        }
        return $tagsWithRecipes;
    }


}
