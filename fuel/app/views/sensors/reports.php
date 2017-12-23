<h1>Reports</h1>
<?php if(Session::get_flash('success')) : ?>
	<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>
<?php endif; ?>
<?php if(Session::get_flash('error')) : ?>
	<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>
<?php endif; ?>

<table class="table table-striped tablesorter" data-toggle="table" 
       data-classes="table table-hover table-condensed"
       data-striped="true"
       data-sort-name="Date"
       data-sort-order="desc"
	   id="table">

	<thead class="thead-light">
		<tr>
		  <th data-field="Name">Sensor Name</th>
		  <th data-field="Value">Value</th>
		  <th data-field="Date" data-sortable="true">Date</th>
		</tr>
	</thead>
	<body>
	<?php $reports = Model_Report::find('all'); ?>
	<?php foreach($reports as $report) : ?> 
	 <tr>
      <td><?php $sensors = Model_Sensor::find($report->sensorId); echo $sensors->name; ?></td>
      <td><?php echo $report->value; ?> <?php echo $sensors->unit ?></td>
      <td><?php echo $report->timestamp; ?></td>
    </tr>
	<?php endforeach; ?>
	</body>
</table>
