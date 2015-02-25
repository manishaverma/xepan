<?php

class page_xProduction_page_owner_user_tasks extends page_xProduction_page_owner_main{
	
	function init(){
		parent::init();

		$this->app->layout->add('View_Error')->set('my All Task Here');
		$tabs=$this->app->layout->add('Tabs');
		$tabs->addTabURL('xProduction_page_owner_task_assigned','Assigned to me');
		$tabs->addTabURL('xProduction_page_owner_task_processing','Processing ');
		$tabs->addTabURL('xProduction_page_owner_task_processed','Processed');
	}
}