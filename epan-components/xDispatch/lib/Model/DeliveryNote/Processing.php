<?php
namespace xDispatch;
class Model_DeliveryNote_Processing extends Model_DeliveryNote{
	function init(){
		parent::init();
		$this->addCondition('status','processing');
	}
}	