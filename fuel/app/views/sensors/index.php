<?php if(Session::get_flash('success')) : ?>
	<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>
<?php endif; ?>
<?php if(Session::get_flash('error')) : ?>
	<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>
<?php endif; ?>
<?php foreach($sensors as $sensor) : ?> 
<div class="list-group">
	<a class="list-group-item list-group-item-action list-group-item-primary" href="/sensors/view/<?php echo $sensor->id; ?>">
		<h2 class="single-sensor-title"><?php echo $sensor->name; ?></h2>
	</a>
</div>
<?php endforeach; ?>