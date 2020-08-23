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
    <h1>Asad routine</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Time</th>
                <th scope="col">Saturday</th>
                <th scope="col">Sunday</th>
                <th scope="col">Monday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
            </tr>
            <?php
            $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
            $sql="select * from asad";
            $result= mysqli_query($mysqli,$sql);
            if($result -> num_rows > 0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["time"] . "</td><td>". $row["saturday"] . "</td><td>".$row["sunday"]."</td><td>".$row["monday"]."</td><td>".$row["wednesday"]."</td><tr>";

                }
                echo "</table>";
            }
            ?>

        </thead>

    </table>

    <h1>Imran routine</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Time</th>
                <th scope="col">Saturday</th>
                <th scope="col">Sunday</th>
                <th scope="col">Monday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
            </tr>
            <?php
            $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
            $sql="select * from imran";
            $result= mysqli_query($mysqli,$sql);
            if($result -> num_rows > 0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["time"] . "</td><td>". $row["saturday"] . "</td><td>".$row["sunday"]."</td><td>".$row["monday"]."</td><td>".$row["wednesday"]."</td><tr>";

                }
                echo "</table>";
            }
            ?>

        </thead>
        <h1>Selim routine</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Saturday</th>
                    <th scope="col">Sunday</th>
                    <th scope="col">Monday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                </tr>
                <?php
            $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
            $sql="select * from selim";
            $result= mysqli_query($mysqli,$sql);
            if($result -> num_rows > 0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["time"] . "</td><td>". $row["saturday"] . "</td><td>".$row["sunday"]."</td><td>".$row["monday"]."</td><tr>";

                }
                echo "</table>";
            }
            ?>

            </thead>

        </table>








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
</body>

</html>