<div class="list-group">
	<h2 class="single-sensor-title"><?php echo $sensor->name; ?></h2>
	<ul>
		<li>
			<p class="blog-post-meta">Id: <?php echo $sensor->id;?></p>
		</li>
		<li>
			<p class="blog-post-meta">Unit: <?php echo $sensor->unit; ?></p>
		</li>
	</ul>
</div>

<br>
<a class="btn btn-default" href="/sensors/edit/<?php echo $sensor->id; ?>">Edit</a>
<a class="btn btn-danger" href="/sensors/delete/<?php echo $sensor->id; ?>">Delete</a>
<br><br>
	