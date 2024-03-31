<?php

class Controller_Tag extends Controller_Base
{
    $this->layout = 'admin_layout';
    
    public function action_index()
    {
        $tags = Tag::findAll();
        $this->render("tag/index", ["tags" => $tags]);
    }

    public function action_add()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                $result = Tag::add($_POST);
                $this->addMessage($result, "add_tag")->redirect("/tag/index");
            }
            catch(Exception $e) {
                $this->addMessage(false, $e->getMessage())->back();
            }
        }
        else {
            $this->render("tag/add");
        }
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                Tag::edit($_POST);
                $this->addMessage("edit_tag", "ok")->redirect("/tag/index");
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/tag/edit", ["id" => $_POST['id']]);
            }
        }
        else {
            $tag = Tag::findOne($_GET['id']);
            $this->render("tag/edit", ['tag' => $tag]);
        }
    } 

    public function action_delete()
    {
        $result = Tag::delete($_GET['id']); 
        $this->addMessage($result, 'delete_tag');
        $this->back();
    }
}