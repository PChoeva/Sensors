<div class="row">
	<div class="col-lg-6">
		<div class="list-group">
			<h2 class="single-sensor-title"><?php echo $sensor->name; ?></h2>
			<br>
			<ul>
				<li>
					<p class="single-sensor-meta">Id: <?php echo $sensor->id;?></p>
				</li>
				<li>
					<p class="single-sensor-meta">Unit: <?php echo $sensor->unit; ?></p>
				</li>
			</ul>
		</div>

	</div>
	<!-- Test -->
	<div class="col-lg-6">
		<h2 class="location-header">Sensor location</h2>
		<div id="map" style="width:100%; height:400px;"></div>
	</div>
	
	<br><br><br><br>
		
	<a class="btn btn-default" href="/sensors/edit/<?php echo $sensor->id; ?>">Edit</a>
	<a class="btn btn-danger" href="/sensors/delete/<?php echo $sensor->id; ?>">Delete</a>
		
</div>
<br><br>
<script>
generateMap(<?php echo $sensor->latitude;?>,<?php echo $sensor->longitude;?>);
</script>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBhNndbduVSdY69v58m5s8NCnPI4yTvRI&callback=initMap">

</script>