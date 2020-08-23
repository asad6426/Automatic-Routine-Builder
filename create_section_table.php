<?php require_once 'process.php';?>
<?php 
//course code search
$mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));

    $query="SELECT * from teachers_course_table";

    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){

        //echo $row["course_code"]."</br>";
        $courseLevTerm =$row['level_term'];
        $courseid=$row['id'];

        $section=$row["course_hour"];
       // echo $courseLevTerm;
        //echo " ";
       // echo $courseLevTerm;

        //echo "</br>";
       
        //echo $name;
       

        echo "</br>";
        $courseLevTerm .= $section;
        $sname=$courseLevTerm;
       // echo $sname;
        echo "</br>";
        $m="Level2Term1";
       
        $qu="CREATE TABLE $sname(id INT NOT NULL AUTO_INCREMENT, time VARCHAR(50) NOT NULL,saturday VARCHAR(50) NULL,sunday VARCHAR(50) NULL,monday VARCHAR(50) NULL,tuesday VARCHAR(50) NULL,wetnesday VARCHAR(50) NULL,thursday VARCHAR(50) NULL,PRIMARY KEY(id) )";
        $re= mysqli_query($mysqli,$qu);
        $le=section_routine_check($sname);

   

    }
    mysqli_free_result($result);
    }

    function section_routine_check($sname){
        $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
        $que="SELECT * from $sname";
        $r= mysqli_query($mysqli,$que);
        if($r -> num_rows > 0){
           /* while($ro=mysqli_fetch_assoc($r)){
                $id = $ro['id'];
                $ti = $ro['time'];
                echo $id;
                echo " ";
                echo $ti;
                echo "</br>";
            }*/

        }
        else{
            $x="A";
            for($i=0;$i<=4;$i++){
                $value=$x;
                $mysqli->query("INSERT INTO $sname (id, time, saturday, sunday, monday, tuesday, wetnesday, thursday) VALUES (NULL, '$value', NULL, NULL, NULL, NULL, NULL, NULL)") or die($mysqli->error);
                $x++;
        }
    }

    }

    ?>