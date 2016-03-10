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

class ServicesController extends AbstractActionController
{
 
	/**
	* @param string $subject
 	* @param string $body
 	*/
    public static function index($subject = '',$body = ''){

	    $this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender(TRUE);

	}

}

