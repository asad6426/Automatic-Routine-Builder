<?php require_once 'process.php';?>
<?php 
//course code search
$mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));

    $query="SELECT * from teachers_course_table";

    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){

        //echo $row["course_code"]."</br>";
        $courseLevTerm=$row['level_term'];
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
       
       
        //$qu="CREATE TABLE $sname(id INT NOT NULL AUTO_INCREMENT, time VARCHAR(50) NOT NULL,saturday VARCHAR(50) NULL,sunday VARCHAR(50) NULL,monday VARCHAR(50) NULL,tuesday VARCHAR(50) NULL,wetnesday VARCHAR(50) NULL,thursday VARCHAR(50) NULL,fryday VARCHAR(50) NULL,PRIMARY KEY(id) )";
        $qu="DROP TABLE $sname";
        $re= mysqli_query($mysqli,$qu);
       // $le=section_routine_check($sname);

       

    }
    mysqli_free_result($result);
    }