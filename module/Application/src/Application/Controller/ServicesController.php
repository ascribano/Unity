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


		$from 	= "no_reply@unityassessments.com.au";
		$to 	= "armando@unityassessments.com.au";
	    $msg 	= new Message();

	    $msg->setFrom(self::$from,'Website Contact')
	        ->setTo(self::$to,'api')
	        ->setSubject($subject);

	    $html 			= new MimePart($body);
	    $html->type 	= Mime::TYPE_HTML;
	    $html->charset 	= 'UTF-8';

	    $body = new MimeMessage();
	    $body->setParts(array($html));

	    // the order is the point
	    $msg->setBody($body);
	    $msg->setEncoding('UTF-8');

	    $smtpOpt = new SmtpOptions(self::$smtpOption);

	    $trans = new Smtp();
	    $trans->setOptions($smtpOpt);
	    $trans->send($msg);

	    $this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender(TRUE);

	}

}

