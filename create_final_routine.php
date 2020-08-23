<?php require_once 'process.php';?>
<?php 
//course code search

    $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
    $inc=0;
    $query="SELECT * from teachers_course_table";
    for($i=1;$i<=2;$i++){
    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){           //from course table.
            $courseid=$row['id'];
            $courseco=$row["course_code"];
            $name=$row["teacher_name"];
            $courseLevTerm =$row["level_term"];
            $section=$row["course_hour"];// all the data from course table.
            $courseLevTerm .= $section;
            $sname=$courseLevTerm; //levelterm concat name = $sname
            //echo $courseLevTerm." ".$section;
            //echo "</br>";
            $inc=$inc+1;
            $check=1;
            $que="SELECT * from day";  //searching day for crate routine for individual routine.
            $r= mysqli_query($mysqli,$que);
            if($r -> num_rows > 0){
                while($ro=mysqli_fetch_assoc($r)){          //the loop for day searching
                    $day = $ro["day"];
                    //echo $day;
                   // echo $sname." ".$day;
                   /* $tc="SELECT *
                    FROM $name
                    WHERE $day IS NOT NULL";
                    $rtc= mysqli_query($mysqli,$tc); 
                    if($rtc -> num_rows >= 3){
                        continue;
                    }*/
                    

                    $q="SELECT *
                    FROM allteacher
                    WHERE t_name='$name' And $day IS NULL";          //searching teacher null time
                    $rq= mysqli_query($mysqli,$q);
                   if($rq -> num_rows > 0){
                        while($rqr=mysqli_fetch_assoc($rq)){     //for teacher null time find loop
                            $t=$rqr["time"];
                            $tid=$rqr['id'];
                            //echo $t."</br>";
                            //echo $name;
                            //echo $t."</br>";
                            $sq="SELECT *
                            FROM sections 
                            WHERE sname='$sname' AND $day IS NULL";   //searching section null time
                            $rsq= mysqli_query($mysqli,$sq);
                            if($rsq -> num_rows > 0){
                                while($rsqr=mysqli_fetch_assoc($rsq)){
                                    $st=$rsqr["time"];
                                    $sid=$rsqr['id'];
                                    //echo $sname;
                                    //echo "hi section";
                                    if ($t==$st){
                                      //echo $st." ";
                                     // echo "hi time";       //this is the same time when teacher and students are free.
                                      $cl="SELECT *
                                      FROM finaldayroutine 
                                      WHERE day= '$day' AND $st IS NULL";//searching day's available roomnumber
                                      $rcl= mysqli_query($mysqli,$cl);
                                      if($rcl -> num_rows > 0){
                                        while($rclr=mysqli_fetch_assoc($rcl)){
                                            $nid=$rclr['id'];
                                            $roomnumber=$rclr['roomnumber'];
                                            //echo $nid." ".$roomnumber;
                                            //echo $nid."</br>";
                                            $test=$tid+1;
                                           $mysqli->query("UPDATE finaldayroutine SET $st='$courseco' WHERE id=$nid") or die($mysqli->error);
                                            $mysqli->query("UPDATE allteacher SET $day='$courseco' WHERE id=$tid") or die($mysqli->error);
                                            $mysqli->query("UPDATE sections SET $day='$courseco' WHERE id=$sid") or die($mysqli->error);
                                            if($st=='E'){

                                            }
                                            else{
                                            $mysqli->query("UPDATE allteacher SET $day=0 WHERE id=$test") or die($mysqli->error);
                                            }
                                            $check=2;
                                            break;
                                        }//end avolable roomnumber loop

                                      }//end avolable roomnumber condition
                                    
                                    }//end the same time free of student and teacher condition
                                    if($check==2) {
                                    break;
                                    } 


                                }//end searching section null time loop
                            }//end searching section null time condition
                           
                           if($check==2) {
                        break;
                        } 

                        }//end seariching teacher null time loop

                    }//end seariching teacher null time condition

                    if($check==2) {
                    break;
                    } 

                 }//end searching day
     
             }//end searching day condition
       /* if($inc==8) {
            break;
        }*/
   
        }//end course table loop
    mysqli_free_result($result);
    }//end course table condition
}