<?php
class Actions extends Controller{
    protected function Add(){
        $viewmodel = new ActionModel();
        $this->ReturnView($viewmodel->add(), true);
    }
    protected function Edit(){
        $viewmodel = new ActionModel();
        $this->ReturnView($viewmodel->edit(), true);
    }
    protected function Delete(){
        $viewmodel = new ActionModel();
        $viewmodel->delete();
        header('Location:'.ROOT_URL);
    }
}