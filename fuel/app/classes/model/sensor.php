<?php
class Model_Sensor extends Orm\Model{
	protected static $_table_name = 'sensorsInfo';
	
	protected static $_properties = array(
		'id',
		'name',
		'unit'	
	);
	
	protected static $_has_one = array(
		'reports' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Report',
			'key_from' => 'SensorId',
			'key_to' => 'sensorId',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	);	
}