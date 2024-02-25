<?php

class Recipe extends Model
{
    public static function getTable() 
    {
        return 'recipes';
    }


    // public static function add($data) 
    // {
    //     self::connect();
    //     $first_name = $data['first_name'];
    //     $last_name = $data['last_name'];
    //     $phone = $data['phone'];
    //     $email = $data['email'];
    //     $photo = 'photo.jpg';
    //     $sql = "INSERT INTO `teachers`(`first_name`, `last_name`, `phone`, `email`, `photo`) 
    //     VALUES (?, ?, ?, ?, ?)"; 
    //     $stmt = self::$db->prepare($sql);
    //     $params = [$first_name, $last_name, $phone, $email, $photo];

    //     return $stmt->execute($params);
    // }


    public static function add($data) 
    {
        $table = self::getTable(); 
        $data['img'] = self::addFile();
        $sql = "INSERT INTO `$table`(`name`, `description`, `prep`, `cook`, `serv`, `img`) 
        VALUES (:name, :description, :prep, :cook, :serv, :img)"; 
        self::execute($sql, $data, 'add_recipe');
        return self::$db->lastInsertId();
    }

    public static function addFile() 
    {
        $img = new File($_FILES['img'], 3000000, ['png', 'jpg', 'jpeg']);
        $img->uploadFile('assets/img/recipes/');
        return $img->fileName;
    }

    public static function edit($data) 
    {
        $table = self::getTable();   
        $sql = "UPDATE `$table` SET `name`= :name,`description`= :description,`prep`= :prep,`cook`= :cook, `serv` = :serv WHERE `id` = :id";
        self::editImg();
        return self::execute($sql, $data, 'edit_recipe');
    }

    // public static function get($data)
    // {
    //     $teacher = self::findOne($data);
    //     return $teacher['last_name'] . ' ' . mb_substr($teacher['first_name'], 0, 1, 'UTF-8') . '.';
    // }

    public static function editImg()
    {
        if($_FILES['img']['error'] == UPLOAD_ERR_NO_FILE) return;
        $recipe = self::findOne($_POST['id']);
        if(file_exists("assets/img/recipes/" . $recipe['img'])) {
            unlink("assets/img/recipes/" . $recipe['img']);
        }
        $file_name = self::addFile();
        self::updateColumn('img', $file_name, $_POST['id']);
    }

    public static function getTags($recipe_id)
    {
        $tag_ids = RecipeTag::getTags($recipe_id);
        return Tag::findMany($tag_ids);
    }

    // public static function getTags($recipe_id)
    // {
    //     self::connect();
    //     $sql = "SELECT t.name, t.id
    //     FROM tags t
    //     JOIN `recipe_tags` r_t
    //     ON r_t.tag_id = t.id
    //     WHERE r_t.recipe_id = '$recipe_id'";
    //     $stmt = self::$db->query($sql);
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

}