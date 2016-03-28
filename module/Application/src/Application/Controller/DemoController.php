<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DemoController extends AbstractActionController
{

    public function indexAction()
    {

        $data = $this->getRequest();
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){

                $data = $form->getValues();
                $auth = Zend_Auth::getInstance();
                $authAdapter = new Zend_Auth_Adapter_DbTable($users->getAdapter(),'users');
                $authAdapter->setIdentityColumn('username')
                            ->setCredentialColumn('password');
                $authAdapter->setIdentity($data['username'])
                            ->setCredential($data['password']);
                $result = $auth->authenticate($authAdapter);
                if($result->isValid()){
                    $storage = new Zend_Auth_Storage_Session();
                    $storage->write($authAdapter->getResultRowObject());
                    $this->_redirect('auth/home');
                } else {
                    $this->view->errorMessage = "Invalid username or password. Please try again.";
                }

            }
        }
        return new ViewModel();
    }
    
}
