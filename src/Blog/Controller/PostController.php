<?php
namespace Blog\Controller;
class PostController extends \Templating\Mvc\Controller\AbstractActionController{
	public function indexAction(){
		//Define title
		$this->layout()->title = $this->getServiceLocator()->get('Translator')->translate('posts');
		return $this->view->setVariable('posts',$this->getServiceLocator()->get('PostService')->getPosts($this->params('page')));
	}

	public function createAction(){
		//Define title
		$this->layout()->title = $this->getServiceLocator()->get('Translator')->translate('write_a_new_post');

		//Assign form
		$this->view->form = $this->getServiceLocator()->get('PostForm');
		if(
			$this->getRequest()->isPost()
			&& $this->view->form->setData($this->params()->fromPost())->isValid()
			&& $iPostId = $this->getServiceLocator()->get('PostService')->createPost(
				$this->params()->fromPost('post_title'),
				$this->params()->fromPost('post_content')
			)
		)$this->redirect()->toRoute('blog/post/read',array('post_id' => $iPostId));

		return $this->view;
	}

	public function readAction(){
		//Define title
		return $this->view;
	}

	public function updateAction(){
		//Define title
		$this->layout()->title = $this->getServiceLocator()->get('Translator')->translate('update_post');
		return $this->view;
	}

	public function deleteAction(){
		return $this->view;
	}
}