<? include('function.php'); //echo date_nice('1539707369'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Atom</title>

	<!--font awsome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
	*:disabled{
		background-color: #cccccc !important;
		border:none !important;
		cursor: not-allowed;
	}
</style>
</head>
<body>

<div class="container-fluid">
	<div class="header">
		<div class="row">
			<div class="col-10"> <a data-mode="restore" id="btn-mode" href="#"><span id="lbl-mode">Restore</span> mode</a> </div>
			<div class="col-2">Time:</div>
		</div>
	</div><!--header-->

	<form id= "form-new">
		<div class="row">
			<div class="col-10"><input name="name" id="name" placeholder="Input the task" class="form-control"></div>
			<div class="col-2"> <button type="submit" class="btn btn-success btn-block"><?= i('play'); ?> </button> </div>
		</div>
	</form><!--finished form-->

	<hr>

	<div class="row">
		<table class="table table-bordered">
			<thead>

				<tr>
					<th>Name</th>
					<th>Start</th>
					<th>End</th>
					<th>Time</th>
					<th colspan="2">Control</th>
				</tr>
			</thead>
			<tbody id="log"></tbody>
		</table>
	</div>

</div><!--finished container-fluid-->
<p>
<div id="demo"></div>

.

<script>
	document.getElementById("demo").innerHTML = navigator.appVersion;
</script>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Jquery manual-->
<script type="text/javascript" src="tracker.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
