<?php

class RecipeTag extends Model
{
    public static function getTable() 
    {
        return 'recipe_tags';
    }

    public static function getTags($recipe_id)
    {
        $table = self::getTable();
        $sql = "SELECT `tag_id` FROM `$table` WHERE `recipe_id` = :recipe_id";
        $stmt = self::$db->prepare($sql);
        $stmt->execute(['recipe_id' => $recipe_id]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getRecipes($tag_id)
    {
        $table = self::getTable();
        $sql = "SELECT `recipe_id` FROM `$table` WHERE `tag_id` = :tag_id";
        $stmt = self::$db->prepare($sql);
        $stmt->execute(['tag_id' => $tag_id]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

}