<?php
class Actions extends Controller{
    protected function Add(){
        $viewmodel = new ActionModel();
        $this->ReturnView($viewmodel->add(), true);
        Messages::setmsg('success', 'Uzdevums tika pievienots');
    }
    protected function Edit(){
        $viewmodel = new ActionModel();
        $this->ReturnView($viewmodel->edit(), true);
        Messages::setmsg('success', 'Uzdevums tika rediģēts');
    }
    protected function Delete(){
        $viewmodel = new ActionModel();
        $viewmodel->delete();
        header('Location:'.ROOT_URL);
        Messages::setmsg('error', 'Uzdevums tika izdzēsts');
    }
}