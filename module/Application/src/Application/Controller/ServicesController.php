<?php
namespace Application\Controller;

use Zend\Mvc\Controller\ActionController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class ServicesController extends AbstractActionController
{

    public function indexAction()
    {
        $result = new ViewModel();
        $result->setTerminal(true);
        $result->setVariables(array('items' => 'items'));
        return $result;
    }

    private function authAction()
    {

        $data = $this->getRequest();
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){

                $data       = $form->getValues();
                $auth       = Zend_Auth::getInstance();
                $authAdapter= new Zend_Auth_Adapter_DbTable($users->getAdapter(),'users');
                $authAdapter->setIdentityColumn('username')
                            ->setCredentialColumn('password');
                $authAdapter->setIdentity($data['username'])
                            ->setCredential($data['password']);
                $result = $auth->authenticate($authAdapter);

                if($result->isValid()){
                    $storage = new Zend_Auth_Storage_Session();
                    $storage->write($authAdapter->getResultRowObject());
                    $this->_redirect('auth/home');

                    $result = new JsonModel(array(
                        'message' => 'Sucess',
                        'success'=>true,));

                } else {
                    $result = new JsonModel(array(
                        'message' => 'Invalid user name or pasword. Please try again',
                        'success'=>false,));
                }

            }
        }

        $result = new JsonModel(array(
                        'message' => 'Sucess',
                        'success'=>true,));
        return $result;
    }

}