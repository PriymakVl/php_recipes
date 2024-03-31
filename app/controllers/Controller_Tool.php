<?php

class Controller_Tool extends Controller_Base
{
    $this->layout = 'admin_layout';

    public function action_index()
    {
        $tools = Tool::findAll();
        $this->render("tool/index", ["tools" => $tools]);
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
            $this->render("tool/add");
        }
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $validate = new Validate($_POST);
                $validate->empty();
                $result = Tool::edit($_POST);
                $this->addMessage($result, "edit_tool")->redirect("/tool/index");
            }
            catch(Exception $e) {
                $this->addMessage(false, $e->getMessage())->back();
            }
        }
        else {
            $tool = Tool::findOne($_GET['id']);
            $this->render("tool/edit", ['tool' => $tool]);
        }
    } 

    public function action_delete()
    {
        $result = Tool::delete($_GET['id']); 
        $this->addMessage($result, 'delete_tool')->back();
    }
}