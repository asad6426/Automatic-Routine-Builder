<?php require_once 'process.php';?>
<?php 
//course code search


    $query="SELECT * from teachers_course_table";
for($i=1;$i<=2;$i++){
    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){

        //echo $row["course_code"]."</br>";
        $courseco=$row["course_code"];
        $courseid=$row['id'];


        //echo $courseco;
        //echo "</br>";
        $name=$row["teacher_name"];
        //echo $name;
        $le=teacher_routine_check($name,$courseco);

        echo "</br>";


    }
    mysqli_free_result($result);
    }
}





function teacher_routine_check($name,$courseco){

    $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
    $s="saturday";
    $su="sunday";
    $mond="monday";
    $tu="tuesday";
    $t="SELECT *
    FROM $name
    WHERE $s IS NULL";//$s=saturday

    $sun="SELECT *
    FROM $name
    WHERE $su IS NULL";//$su="sunday"
    $mon="SELECT *
    FROM $name
    WHERE $mond IS NULL";//$mond="monday"
    $tues="SELECT *
    FROM $name
    WHERE $tu IS NULL";//$tu="tuesday"
    $i=0;
    $r= mysqli_query($mysqli,$t);
    $rs= mysqli_query($mysqli,$sun);
    $m= mysqli_query($mysqli, $mon);
    
    if($r -> num_rows > 0){
        while($ro=mysqli_fetch_assoc($r)){
            $id = $ro['id'];
            $ti = $ro['time'];
            $in=$id+1;
            $i=1;


            $nul="SELECT *
            FROM $s
            WHERE $ti IS NULL";
            if( $rm= mysqli_query($mysqli,$nul)){
                while($row=mysqli_fetch_assoc($rm)){

                    $mo=$row['id'];

                    $inse=$mysqli->query("UPDATE $s SET $ti='$courseco' WHERE id=$mo") or die($mysqli->error);
                    $inse=$mysqli->query("UPDATE $name SET $s='$courseco' WHERE id=$id") or die($mysqli->error);
                    $inse=$mysqli->query("UPDATE $name SET $s=0 WHERE id=$in") or die($mysqli->error);
                    //$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );
                    break;

                }
                mysqli_free_result($rm);
            }
            break;

        }
        mysqli_free_result($r);

    }


    //for sunday
    else if( $rs -> num_rows > 0 ){
        
            while($ro=mysqli_fetch_assoc($rs)){
                $id = $ro['id'];
                $ti = $ro['time'];
                $in=$id+1;
                $i=1;
    
    
                $nul="SELECT *
                FROM $su
                WHERE $ti IS NULL";
                if( $rm= mysqli_query($mysqli,$nul)){
                    while($row=mysqli_fetch_assoc($rm)){
    
                        $mo=$row['id'];
    
                        $inse=$mysqli->query("UPDATE $su SET $ti='$courseco' WHERE id=$mo") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $su='$courseco' WHERE id=$id") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $su=0 WHERE id=$in") or die($mysqli->error);
                        //$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );
                        break;
    
                    }
                    mysqli_free_result($rm);
                }
                break;
    
             }
        mysqli_free_result($rs);
        
    
    }


    //for monday
    else if( $m -> num_rows > 0 ){
        
            while($ro=mysqli_fetch_assoc($m)){
                $id = $ro['id'];
                $ti = $ro['time'];
                $in=$id+1;
                $i=1;
    
    
                $nul="SELECT *
                FROM $su
                WHERE $ti IS NULL";
                if( $rm= mysqli_query($mysqli,$nul)){
                    while($row=mysqli_fetch_assoc($rm)){
    
                        $mo=$row['id'];
    
                        $inse=$mysqli->query("UPDATE $mond SET $ti='$courseco' WHERE id=$mo") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $mond='$courseco' WHERE id=$id") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $mond=0 WHERE id=$in") or die($mysqli->error);
                        //$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );
                        break;
    
                    }
                    mysqli_free_result($rm);
                }
                break;
    
             }
        mysqli_free_result($m);
        
    
    }

    //for tuesday
    else if( $tue= mysqli_query($mysqli, $tues) ){
        
            while($ro=mysqli_fetch_assoc($tue)){
                $id = $ro['id'];
                $ti = $ro['time'];
                $in=$id+1;
                $i=1;
    
    
                $nul="SELECT *
                FROM $su
                WHERE $ti IS NULL";
                if( $rm= mysqli_query($mysqli,$nul)){
                    while($row=mysqli_fetch_assoc($rm)){
    
                        $mo=$row['id'];
    
                        $inse=$mysqli->query("UPDATE $tu SET $ti='$courseco' WHERE id=$mo") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $tu='$courseco' WHERE id=$id") or die($mysqli->error);
                        $inse=$mysqli->query("UPDATE $name SET $tu=0 WHERE id=$in") or die($mysqli->error);
                        //$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );
                        break;
    
                    }
                    mysqli_free_result($rm);
                }
                break;
    
             }
        mysqli_free_result($tue);
        }
    
    

}

?>