<?php

class Controller_Sensors extends Controller_Template
{
	public function action_index()
	{
		//$sensors = Model_Sensor::find('all');
		
		$sensors = Model_Sensor::find('all');

		
		$data = array('sensors' => $sensors);
		$this->template->title = 'Sensors Home Page';
		$this->template->content = View::forge('sensors/index',$data,false);
	}

	public function action_add()
	{
		if(Input::post('send')){
			$sensor = new Model_Sensor();
			$sensor->name = Input::post('name');
			$sensor->unit = Input::post('unit');
			$sensor->latitude = Input::post('latitude');
			$sensor->longitude = Input::post('longitude');
			
			$sensor->save();
			
			Session::set_flash('success','Sensor Added');
			
			Response::redirect('/');
		}
		
		$data = array();
		$this->template->title = 'Add Sensor';
		$this->template->content = View::forge('sensors/add',$data,false);
	}
	
	public function action_reports()
	{
		
	
		if( array_key_exists('id', $_GET) && array_key_exists('value', $_GET) )
		{
			echo $_GET['id'];
			echo $_GET['value'];
			$report = new Model_Report();
			$report->sensorId = $_GET['id'];
			$report->value = $_GET['value'];
			$report->save();
			//Session::set_flash('success','Report Added');
			sleep(1);
			$this->template->content = View::forge('sensors/addReport');	
		}
		else
		{
				$this->template->content = View::forge('sensors/reports');
		}
	//	$reports = Model_Report::find('all');
	//	$reportData = array('reports' => $reports);
		
		$this->template->title = 'Report History';
	}
	
	public function action_addReport()
	{
		//$this->template->title = 'Sensors Home Page';
		//$this->template->content = View::forge('sensors/bello');
		
		
		$this->template->title = 'Add Report';
		$this->template->content = View::forge('sensors/addReport');
	}
	
	public function action_view($id){
		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)

		));
		
		$data = array('sensor' => $sensor);
		$this->template->title = $sensor->name;
		$this->template->content = View::forge('sensors/view',$data,false);
	}
	public function action_edit($id){
		if(Input::post('send')){
			$sensor = Model_Sensor::find(Input::post('sensor_id'));
			$sensor->name = Input::post('name');
			$sensor->unit = Input::post('unit');
			$sensor->latitude = Input::post('latitude');
			$sensor->longitude = Input::post('longitude');
			
			$sensor->save();
			
			Session::set_flash('success','Sensor Updated');
			
			Response::redirect('/');
		}
		
		$sensor = Model_Sensor::find('first', array(
			'where' => array(
				'id' => $id
			)
		));
		
		$data = array('sensor' => $sensor);
		$this->template->title = 'Edit Sensor';
		$this->template->content = View::forge('sensors/edit',$data,false);
	}
	
	public function action_delete($id){
		$sensor = Model_Sensor::find($id);
		$sensor->delete();
		
		Session::set_flash('success','Sensor Deleted');
			
		Response::redirect('/');
	}
}
