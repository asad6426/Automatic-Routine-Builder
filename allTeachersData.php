<?php require_once 'process.php';?>
<?php 
//course code search
$mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));

    $query="SELECT * from teachers_course_table";
    $i=1;

    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){

        //echo $row["course_code"]."</br>";
        $courseLevTerm =$row['level_term'];
        $courseid=$row['id'];

        $section=$row["course_hour"];
        $tname=$row["teacher_name"];
       
        
      $que="SELECT * from allteacher where t_name ='$tname'";
        $r= mysqli_query($mysqli,$que);
        if($r -> num_rows > 0){
            while($ro=mysqli_fetch_assoc($r)){
              /*  $id = $ro['id'];
                $ti = $ro['time'];
                $tn = $ro['t_name'];
                echo $id;
                echo " ";
                echo $ti;
                echo " ";
                echo $tn;
                echo "</br>";*/
            }

        }
        else{
            $x="A";
            for($i=0;$i<=4;$i++){
                $value=$x;
                $mysqli->query("INSERT INTO allteacher (id,t_name, time, saturday, sunday, monday, tuesday, wednesday, thursday) VALUES (NULL, '$tname','$value', NULL, NULL, NULL, NULL, NULL, NULL)") or die($mysqli->error);
                $x++;
        }
    }
  


       
   
   

    }
    mysqli_free_result($result);
    }


    ?>