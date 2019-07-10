<?php
class Actions extends Controller{
    protected function Add(){
        $viewmodel = new ActionModel();
        $this->ReturnView($set_message = $viewmodel->add(), true);
        if($set_message) {
            Messages::setmsg('success', 'Uzdevums tika pievienots');
        }
    }
    protected function Edit(){
        $viewmodel = new ActionModel();
        $this->ReturnView($set_message = $viewmodel->edit(),true);
        if($set_message) {
            Messages::setmsg('success', 'Uzdevums tika rediģēts');
        }
    }
    protected function Delete(){
        $viewmodel = new ActionModel();
        $viewmodel->delete();
        header('Location:'.ROOT_URL);
        Messages::setmsg('error', 'Uzdevums tika izdzēsts');
    }
}