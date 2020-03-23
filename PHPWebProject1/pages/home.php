<?php
	// Set session variables
	$_SESSION["datumDnes"] = date("l, d.m.Y");

	$conn->query("SET CHARACTER SET utf8");
	//alebo v xampp/mysql/bin/my.ini   doplnit:
	//[mysqld]
	//character-set-server=utf8
	//collation-server=utf8_slovak_ci

	//if($_GET["hladaj"]) $sql = "SELECT * FROM knihy WHERE nazov='".$_GET["hladaj"]."'";		//ak je presná zhoda
	if(isset($_GET["hladaj"])) $sql = "SELECT * FROM knihy WHERE rok LIKE '%".$_GET["hladaj"]."%' OR nazov LIKE '%".$_GET["hladaj"]."%'";	//ak obsahuje h¾adaný reazec

	else $sql = "SELECT * FROM knihy";
	//$sql = "SELECT * FROM knihy WHERE autor LIKE 'Ján PILLÁR 1'";	//ORDER BY xxxx LIMIT 9
	$result = $conn->query($sql);

	//echo $result->num_rows;	//poèet vrátených riadkov

	//echo $_GET["hladaj"];
	//echo $_POST["hladaj"];
?>


	<div class="row">
		<ul class="nav nav-pills nav-fill col-md-12 mb-3">
			<li class="nav-item"><a class="nav-link active" href="../index.php?link=home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="../index.php?link=dataTables.php">Table</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Link1</a></li>
		</ul>
	</div>

	<div class="row jumbotron display-4">
		<div class="col-md-12 text-center">
			<?php
				echo "Ahoj WEBDIZAJN 2<br>" . $_SESSION["datumDnes"];
			?>
		</div>
	</div>

	<div class="row mt-5">
		<?php
			$json = Array();
			while($row = $result->fetch_assoc())
			//for($i=0; $i<9; $i++)
			{
			//$row = $result->fetch_assoc();//$result->num_rows;

			//$json = json_encode($row, JSON_UNESCAPED_UNICODE);
			//echo $json;

			//$json_array["id"] = $row["id"];
			//$json_array["nazov"] = $row["nazov"];
			//$json_array["autor"] = $row["autor"];
			//$json_array["rok"] = $row["rok"];
			//$json_array["obr"] = $row["obr"];
			//array_push($json,$json_array);

			array_push($json,$row);
		?>
			<div class="card p-1 mb-3 col-md-4">
			  <div class="row no-gutters">
				<div class="col-md-4">
				  <img src="images/<?php echo $row["obr"]; ?>" class="card-img" alt="Foto">
				</div>
				<div class="col-md-8">
				  <div class="card-body">
					<h5 class="card-title"><?php echo $row["nazov"]; ?></h5>
					<p class="card-text"><?php echo $row["autor"]; ?></p>
					<p class="card-text"><small class="text-muted"><?php echo $row["rok"]; ?></small></p>
				  </div>
				</div>
			  </div>
			</div>
		<?php
			}
			//echo json_encode($json, JSON_UNESCAPED_UNICODE);
		?>
	</div>

<!--<div class="row">
		<div class="col-md-12">
			<?php //phpinfo(); ?>
    	</div>
	</div>
-->


</div>