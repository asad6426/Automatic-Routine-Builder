<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Routine Builder</title>
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
											include_once("process.php");
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
                <input type="SUBMIT" name="submit" />
            </form>
        </div>

        <center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">semester</th>
                        <th scope="col">Level_term</th>
                        <th scope="col">Corse_Code</th>
                        <th scope="col">Course_Title</th>
                        <th scope="col">Section</th>
                        <th scope="col">Course_Cr</th>
                        <th scope="col">Teacher_Initial_Name</th>
                        <th scope="col">Approx_Class_Size</th>
                    </tr>
                    <?php
                    $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
                    if(isset ($_POST['submit'])){
                        $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
                        $Semester=$_POST['Semester'];
                       //echo $Semester;
                    }
            
            $sql="select * from $Semester";
            $result= mysqli_query($mysqli,$sql);
            if($result -> num_rows > 0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["semester"] . "</td><td>". $row["Level_Term"] . "</td><td>".$row["Course_Code"]."</td><td>".$row["Course_Title"]."</td><td>".$row["Sections"]."</td><td>".$row["Course_Cr"]."</td><td>".$row["Teacher_Initial_Name"]."</td><td>".$row["Approx_Class_Size"]."</td></tr>";

                }
                echo "</table>";
            }
            ?>

                </thead>





                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                    crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                    crossorigin="anonymous">
                </script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                    crossorigin="anonymous">
                </script>
</body>

</html>