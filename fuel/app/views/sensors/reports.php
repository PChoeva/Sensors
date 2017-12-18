<h1>Reports</h1>
<?php if(Session::get_flash('success')) : ?>
	<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>
<?php endif; ?>
<?php if(Session::get_flash('error')) : ?>
	<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>
<?php endif; ?>

<?php $_cnt = 1; ?>
<table class="table table-striped tablesorter" id="table">
	<thead class="thead-light">
		<tr>
		  <th>#</th>
		  <th>Sensor Name</th>
		  <th>Value</th>
		  <th>Date</th>
		</tr>
	</thead>
	<body>
	<?php $reports = Model_Report::find('all'); ?>
	<?php foreach($reports as $report) : ?> 
	 <tr>
      <th scope="row"><?php echo $_cnt++; ?> </th>
      <td><?php $sensors = Model_Sensor::find($report->sensorId); echo $sensors->name; ?></td>
      <td><?php echo $report->value; ?> <?php echo $sensors->unit ?></td>
      <td><?php echo $report->timestamp; ?></td>
    </tr>
	<?php endforeach; ?>
	</body>
</table>
