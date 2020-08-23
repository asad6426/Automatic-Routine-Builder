<!DOCTYPE html>
<?php require_once 'process.php';?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creating Course Of Semester</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.tabledit.min.js" type="text/javascript"></script>


	<style type="text/css">
		body {
			margin: 0px;
			padding: 0px;
			font-family: sans-serif;
			background-color: whitesmoke;

		}

		ul {
			margin: 0px;
			padding: 0px;
			list-style: none;
		}

		ul li a {
			text-decoration: none;
			color: black;
			display: block;
		}

		#sidebar i {
			margin-right: 20px;
		}

		#sidebar ul li:hover {
			padding-left: 30px;
			background-color: black;
			text-decoration: none;
			border-radius: 20px;
			margin-top: 10px;
		}

		ul li ul li {
			display: none;
		}

		#sidebar ul li:hover ul li {
			display: block;
		}

		#sidebar {
			position: fixed;
			width: 370px;
			height: 100%;
			background: #4D4D4D;
			left: -370px;
			transition: all 500ms linear;
		}

		#sidebar.active {
			left: 0px;
		}

		#sidebar ul li {
			color: rgba(230, 230, 230, 0.9);
			list-style: none;
			padding: 15px 10px;
			border-bottom: 1px solid black;
		}

		#sidebar ul a {
			display: block;
			height: 100%;
			width: 100%;
			line-height: 35px;
			font-size: 20px;
			color: white;
			padding-left: 40px;
			box-sizing: border-box;
			border-top: 1px solid rgba(255, 255, 255, 0.1);
			border-bottom: 0px solid rgba(255, 255, 255, 0.1);
			transition: .4s;
			font-style: italic;
			font-family: cursive;
			border-radius: 10px;
		}

		#sidebar .toggle-btn {
			position: absolute;
			left: 390px;
			top: 20px;

		}

		#sidebar .toggle-btn span {
			display: block;
			width: 30px;
			height: 5px;
			background: black;
			margin: 05px 0px;
			border-radius: 10px;
		}

		table,
		th,
		td {
			border: 2px solid black;
			width: 2500px;
			background-color: dimgrey;
			border-radius: 5px;
			color: black;
		}

		.jumbotron {
			padding-bottom: 20px;
			padding-top: 5px;
			margin-top: 6px;
			background-color: gray;
		}

		.srs {
			padding-right: 200px;
			border-color: 5px solid black;
			border-radius: 5px;
			padding: 10px;
		}

		#ab {
			padding: 20px;
		}

		.section_for_table {
			width: 100%;
			height: 100%;
			float: Right;
		}

		.section_for_form {
			width: 100%;
			height: 50%;
			float: left;
		}

		.form_for_course_creation {
			margin-left: 15%;
			margin-right: 15%;
			padding: 0%;
			width: 100%;
			height: 100%;
			margin-left: 0%;
			background: darkgray;
			border-radius: 5px;
			padding-bottom: 20px;
		}

		#container {
			font-size-adjust: 20px;
			background-color: skyblue;
			border-radius: 5%;
			margin: 10px;
			padding: 20px;
		}
	</style>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function (e) {

			//variables
			var html =
				'<p/><div><div id="container" style="margin-right: 20%; margin-left:20%"><form action="#" method="POST"><center><label for="Level_Term" class="control-label">Select Level Term :</label>&nbsp;<select name="term" id="childterm"><option value="" selected disabled="">--Select Level Term--</option><option value="Level-1Term-1">Level-1 Term-1</option><option value="Level-1Term-2">Level-1 Term-2</option><option value="Level-1Term-3">Level-1 Term-3</option><option value="Level-2Term-1">Level-2 Term-1</option><option value="Level-2Term-2">Level-2 Term-2</option><option value="Level-2Term-3">Level-2 Term-3</option><option value="Level-3Term-1">Level-3 Term-1</option><option value="Level-3Term-2">Level-3 Term-2</option><option value="Level-3Term-3">Level-3 Term-3</option><option value="Level-4Term-1">Level-4 Term-1</option><option value="Level-4Term-2">Level-4 Term-2</option><option value="Level-4Term-3">Level-4 Term-3</option></select><label for="code">Course Code :</label>&nbsp;<select name="Course_Code" id="childCourse_Code"><option value="" selected disabled="">--Select Course Code--</option><?phpinclude_once("config.php");$querys = "SELECT Course_Code FROM courses_information order by Level_Term ASC";$results = mysqli_query($mysqli,$querys);if ($results) {while($row=mysqli_fetch_array($results)){$Course_Code=$row["Course_Code"];echo"<option>$Course_Code<br></option>";}}	?></select><br><br><label for="code">Course Title :</label>&nbsp;<select name="Course_Title" id="childCourse_Title"><option value="" selected disabled="">--Select Course Title--</option><?phpinclude_once("config.php");$querys = "SELECT Course_Title FROM courses_information order by Level_Term ASC";$results = mysqli_query($mysqli,$querys);if ($results) {while($row=mysqli_fetch_array($results)){$Course_Title=$row["Course_Title"];echo"<option>$Course_Title<br></option>";}}	?></select>&nbsp;<label for="code">Teacher Cr :</label>&nbsp;<select name="cr" id="childcr"><option value="1">1 Cr</option><option value="2">2 Cr</option><option value="3" selected>3 Cr</option></select><br><br><label for="Sections">Select Sections :</label>&nbsp;<select name="sections" id="childsections"><option value="" selected disabled="">--Select Sections--</option><option value="Null">Null</option><option value="PC-A">PC-A</option><option value="PC-B">PC-B</option><option value="PC-C">PC-C</option><option value="PC-D">PC-D</option><option value="PC-E">PC-E</option><option value="PC-F">PC-F</option><option value="PC-G">PC-G</option><option value="PC-H">PC-H</option><option value="PC-I">PC-I</option><option value="PC-J">PC-J</option><option value="PC-K">PC-K</option><option value="PC-L">PC-L</option></select><label for="code">Credit Hours :</label>&nbsp;<select name="Credit_Hours" id="childCredit_Hours"><option value="1">1 Hour</option><option value="1.5" selected>1.5 Hour</option></select><br><br></center><a href="#" id="remove">X</a></form></div>';

			//Add rows to the form
			$("#add").click(function (e) {
				$("#container").append(html);
			});

			//Remove rows from the form
			$("#container").on('click', '#remove', function (e) {
				$(this).parent('div').remove();
			});
		});
	</script>
</head>

<body>





	<center>
		<div class="container">
			<form action="#" method="POST">
				<h2 style="color: #1A1A1A;"><strong>Course Creation For Semester</strong></h2><br>
				<div class="form-group" style="margin-left:10%; margin-right:10%">
					<h4><label class="control-label " for="Semester">Select Semester</label></h4>
					<select name="Semester" id="Semester" class="form-control" value="<?php echo $Semester;?>">
						<option value="" selected disabled="">--Select Semester--</option>
						<?php
											 require_once 'process.php';
											$querys = "SELECT Semester FROM semester order by id";
											$results = mysqli_query($mysqli,$querys);
											if ($results) 
											{
												while($row=mysqli_fetch_array($results))
												{
													$Semester=$row["Semester"];
													echo"<option>$Semester<br></option>";
												}
											}	
										?>
					</select>
				</div>
				<div class="form-group" style="margin-left:10%; margin-right:10%">
					<h4><label class="control-label " for="Teacher_Initial_Name">Select Teacher Name</label></h4>
					<select name="Teacher_Initial_Name" id="Teacher_Initial_Name" class="form-control" required>
						<option value="" selected disabled="">--Select Teacher Name--</option>
						<option value="Null">Null</option>
						<?php
                            include_once("config.php");
                            $querys = "SELECT Teacher_Initial_Name FROM teachers_information";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $Teacher_Initial_Name=$row["Teacher_Initial_Name"];
                                    echo"<option>$Teacher_Initial_Name<br></option>";
                                }
                            }	
                        ?>
					</select>
				</div>
			</form>
		</div>
	</center>




	<div id="container" style="margin-right: 20%; margin-left:20%">
		<form action="#" method="POST">
			<center>
				<label for="Level_Term" class="control-label">Select Level Term :</label>&nbsp;
				<select name="term" id="term">
					<option value="" selected disabled="">--Select Level Term--</option>
					<option value="Level-1Term-1">Level-1 Term-1</option>
					<option value="Level-1Term-2">Level-1 Term-2</option>
					<option value="Level-1Term-3">Level-1 Term-3</option>
					<option value="Level-2Term-1">Level-2 Term-1</option>
					<option value="Level-2Term-2">Level-2 Term-2</option>
					<option value="Level-2Term-3">Level-2 Term-3</option>
					<option value="Level-3Term-1">Level-3 Term-1</option>
					<option value="Level-3Term-2">Level-3 Term-2</option>
					<option value="Level-3Term-3">Level-3 Term-3</option>
					<option value="Level-4Term-1">Level-4 Term-1</option>
					<option value="Level-4Term-2">Level-4 Term-2</option>
					<option value="Level-4Term-3">Level-4 Term-3</option>
				</select>
				<label for="code">Course Code :</label>&nbsp;
				<select name="Course_Code" id="Course_Code">
					<option value="" selected disabled="">--Select Course Code--</option>
					<?php
						include_once("config.php");
						$querys = "SELECT Course_Code FROM courses_information order by Level_Term ASC";
						$results = mysqli_query($mysqli,$querys);
						if ($results) 
						{
							while($row=mysqli_fetch_array($results))
							{
								$Course_Code=$row["Course_Code"];
								echo"<option>$Course_Code<br></option>";
							}
						}	
					?>
				</select><br><br>
				<label for="code">Course Title :</label>&nbsp;
				<select name="Course_Title" id="Course_Title">
					<option value="" selected disabled="">--Select Course Title--</option>
					<?php
					include_once("config.php");
					$querys = "SELECT Course_Title FROM courses_information order by Level_Term ASC";
					$results = mysqli_query($mysqli,$querys);
					if ($results) 
					{
						while($row=mysqli_fetch_array($results))
							{
								$Course_Title=$row["Course_Title"];
								echo"<option>$Course_Title<br></option>";
							}
					}	
				?>
				</select>&nbsp;
				<label for="code">Teacher Cr :</label>&nbsp;
				<select name="cr" id="cr">
					<option value="1">1 Cr</option>
					<option value="2">2 Cr</option>
					<option value="3" selected>3 Cr</option>
				</select><br><br>
				<label for="Sections">Select Sections :</label>&nbsp;
				<select name="sections" id="sections">
					<option value="" selected disabled="">--Select Sections--</option>
					<option value="Null">Null</option>
					<option value="PC-A">PC-A</option>
					<option value="PC-B">PC-B</option>
					<option value="PC-C">PC-C</option>
					<option value="PC-D">PC-D</option>
					<option value="PC-E">PC-E</option>
					<option value="PC-F">PC-F</option>
					<option value="PC-G">PC-G</option>
					<option value="PC-H">PC-H</option>
					<option value="PC-I">PC-I</option>
					<option value="PC-J">PC-J</option>
					<option value="PC-K">PC-K</option>
					<option value="PC-L">PC-L</option>
					<option value="PC-M">PC-M</option>
					<option value="PC-N">PC-N</option>
					<option value="PC-O">PC-O</option>
					<option value="PC-P">PC-P</option>
					<option value="PC-Q">PC-Q</option>
					<option value="PC-R">PC-R</option>
					<option value="PC-S">PC-S</option>
					<option value="PC-T">PC-T</option>
					<option value="PC-U">PC-U</option>
					<option value="PC-V">PC-V</option>
					<option value="PC-W">PC-W</option>
					<option value="PC-X">PC-X</option>
					<option value="PC-Y">PC-Y</option>
					<option value="PC-Z">PC-Z</option>
				</select>
				<label for="code">Credit Hours :</label>&nbsp;
				<select name="Credit_Hours" id="Credit_Hours">
					<option value="1">1 Hour</option>
					<option value="1.5" selected>1.5 Hour</option>
					<option value="2">2 Hour</option>
					<option value="3">3 Hour</option>
				</select><br><br>
			</center>
			<a href="#" id="add"><button type="button" class="btn btn-primary">Add</button></a>

		</form>
	</div>
</body>