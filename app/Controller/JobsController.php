<?php

class JobsController extends AppController{
	public $name = 'Jobs';

	/*
	 * Default Index Method
	 */
	public function index(){
		// set query options
		$options = array(
			'order' => array('Job.created' => 'asc'),
			'limit' => 1
			);
		// get job info
		$jobs = $this->Job->find('all', $options);
		$this->set('jobs', $jobs);
	}
}