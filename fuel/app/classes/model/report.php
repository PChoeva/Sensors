<?php
class Model_Report extends Orm\Model{
	protected static $_table_name = 'reports';
	protected static $_properties = array(
		'id',
		'sensorId',
		'value',
		'timestamp'
	);
	
	protected static $_belongs_to = array(
		'sensor' => array(
			'key_from' => 'sensorId',
			'model_to' => 'Model_Sensor',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	); 	
}