<?php
session_start();	// Start the session
?>

<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<link rel="stylesheet" href="/scripts/my.css" />

	<title>Ahoj WebDizajn 2!</title>
</head>

<body>

    <div class="container">

	<div class="row">
		<div class="col-md-8">
			<img src="/images/obr1.jpg" class="rounded-circle mt-2 mb-3" width="90" height="90" alt="LOGO">
		</div>
		<div class="col-md-4 mt-2">
			<form action="index.php" method="get">
			  <div class="form-row">
				  <div class="col-md-8">
					<input type="text" class="form-control" name="hladaj" placeholder="hľadaný text">
				  </div>
				  <div class="col-md-4">
					<button type="submit" class="btn btn-primary">Odoslať</button>
				  </div>
			  </div>
			</form>
		</div>
	</div>