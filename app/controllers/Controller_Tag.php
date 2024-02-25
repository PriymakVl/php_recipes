<?php

class Controller_Tag extends Controller_Base
{
    public function action_index()
    {
        $tags = Tag::findAll();
        View::admin("tag/index", ["tags" => $tags]);
    }

    public function action_add()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                Tag::add($_POST);
                $this->addMessage("add_tag", "ok")->redirect("/tag/index");
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/tag/add");
            }
        }
        else {
            View::admin("tag/add");
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
            View::admin("tag/edit", ['tag' => $tag]);
        }
    } 

    public function action_delete()
    {
        $result = Tag::delete($_GET['id']); 
        $result ?  $this->addMessage("delete_tag", "ok") : $this->addMessage("delete_tag", "error");
        $this->redirect("/tag/index");
    }
}