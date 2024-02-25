<?php

class Controller_Tool extends Controller_Base
{
    public function action_index()
    {
        $tools = Tool::findAll();
        View::admin("tool/index", ["tools" => $tools]);
    }

    public function action_add()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                Tool::check($_POST['name']);               
                Tool::add($_POST);
                $this->addMessage("add_tool", "ok")->redirect("/tool/index");
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/tool/add");
            }
        }
        else {
            View::admin("tool/add");
        }
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                Tool::edit($_POST);
                $this->addMessage("edit_tool", "ok")->redirect("/tool/index");
            }
            catch(Exception $e) {
                $this->addMessage($e->getMessage(), "error")->redirect("/tool/edit", ["id" => $_POST['id']]);
            }
        }
        else {
            $tool = Tool::findOne($_GET['id']);
            View::admin("tool/edit", ['tool' => $tool]);
        }
    } 

    public function action_delete()
    {
        $result = Tool::delete($_GET['id']); 
        $result ?  $this->addMessage("delete_tool", "ok") : $this->addMessage("delete_tool", "error");
        $this->redirect("/tool/index");
    }
}