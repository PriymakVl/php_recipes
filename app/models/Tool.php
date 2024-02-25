<?php

class Tool extends Model 
{
    public static function getTable() 
    {
        return 'tools';
    }

    public static function add($data) 
    {
        $table = self::getTable(); 
        $sql = "INSERT INTO `$table`(`name`) VALUES (:name)"; 
        self::execute($sql, $data, 'add_tool');
    }

    public static function edit($data) 
    {  
        $result = self::updateColumn('name', $data['name'], $data['id']);
        if($result === false){
            throw new Exception('edit_tool');
        }
    }

    // public static function getRecipes($tag_id)
    // {
    //     $recipes_ids = RecipeTag::getRecipes($tag_id);
    //     return Recipe::findMany($recipes_ids);
    // }

    public static function check($name) 
    {
        self::connect();
        $sql = "SELECT * FROM `tools` WHERE `name` = :name ";
        $data = ['name' => $name];
        $stmt = self::$db->prepare($sql);
        $stmt->execute($data);
        $tool = $stmt->fetch();
        if($tool){
            throw new Exception('exist_tool');
        }
    }

}