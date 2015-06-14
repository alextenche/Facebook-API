<?php

class UsersController extends AppController {

public $name = 'Users';

	/*
	 * register a new user
	 */
	public function register(){
		if($this->request->is('post')){
			$this->User->create();

			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('you are now registered and may login'));
				return $this->redirect(array('controller' => 'jobs', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('there was a problem creating your account'));
			}
		}	
	}





	/*
	 * login user
	 */
	public function login(){

		if($this->request->is('post')){
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('invalid username or password, try again'));
			}
		}
	}






	/*
	 * logout user
	 */
	public function logout(){

		return $this->redirect($this->Auth->logout());

	}




}