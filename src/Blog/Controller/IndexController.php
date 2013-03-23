<?php
namespace Blog\Controller;
class IndexController extends \Templating\Mvc\Controller\AbstractActionController{
    public function indexAction(){
    	//Define title
    	$this->layout()->title = $this->getServiceLocator()->get('Translator')->translate('blog');
    	return $this->view;
    }
}