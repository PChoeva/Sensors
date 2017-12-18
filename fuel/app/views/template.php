<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('style.css'); ?>

    <!-- Custom styles for this template -->
<!--    <link href="blog.css" rel="stylesheet"> -->
  </head>

  <body>

    <header>
      <div class="sensor-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/sensors/add">Add sensor</a>
            <a class="nav-link" href="/sensors/reports">Reports</a>
          </nav>
        </div>
      </div>

      <div class="sensors-header">
        <div class="container">
          <h1 class="sensors-title">Sensors</h1>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8">
        <?php echo $content; ?>
        </div>

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="sensor-footer">
      <p>Site built on fuelPHP</p>
	  <p>@PChoeva2017</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
	-->
  </body>
</html>
