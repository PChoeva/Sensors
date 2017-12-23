<h1>Add sensor</h1>

<?php echo Form::open('/sensors/add'); ?>
	<div class="form-group">
		<?php echo Form::label('Name', 'name'); ?>
		<?php echo Form::input('name', Input::post('name', isset($sensor) ? $sensor->name : ''), array('class' => 'form-control')); ?>  

	</div>
	<div class="form-group">
		<?php echo Form::label('Unit', 'unit'); ?>
		<?php echo Form::input('unit', Input::post('unit', isset($sensor) ? $sensor->unit : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Latitude', 'latitude'); ?>
		<?php echo Form::input('latitude', Input::post('latitude', isset($sensor) ? $sensor->latitude : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Longitude', 'longitude'); ?>
		<?php echo Form::input('longitude', Input::post('longitude', isset($sensor) ? $sensor->longitude : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="actions">
		<?php echo Form::submit('send'); ?>
	</div>

<?php echo Form::close(); ?>