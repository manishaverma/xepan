<?php

class page_xStore_page_owner_materialrequestreceived_approved extends page_xStore_page_owner_main{
	function init(){
		parent::init();

		$model = $this->add('xStore/Model_MaterialRequestReceived_Approved');

		$crud=$this->add('CRUD');
		$crud->setModel($model);
		$crud->add('xHR/Controller_Acl');
	}
	
}