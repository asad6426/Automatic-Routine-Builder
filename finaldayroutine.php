<?php require_once 'process.php';?>
<?php 
//course code search
$mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));

    $query="SELECT * from day";
    $i=1;

    if( $result= mysqli_query($mysqli,$query)){
       while($row=mysqli_fetch_assoc($result)){

        //echo $row["course_code"]."</br>";
       
        $dayid=$row['id'];

        $day=$row["day"];
        
        
        
       
        
   $que="SELECT * from finaldayroutine where day ='$day' ";//
        $r= mysqli_query($mysqli,$que);
        if($r -> num_rows > 0){
            while($ro=mysqli_fetch_assoc($r)){
               /* $id = $ro['id'];
                $ti = $ro['time'];
                $tn = $ro['sname'];
                echo $id;
                echo " ";
                echo $ti;
                echo " ";
                echo $tn;
                echo "</br>";*/
  
            }

        }
       else{
        
            $x=101;
            for($i=0;$i<=6;$i++){
                $value=$x;
                $mysqli->query("INSERT INTO finaldayroutine (id,day, roomnumber , A, B, C, D, E, F) VALUES (NULL,'$day', $value, NULL, NULL, NULL, NULL, NULL, NULL)") or die($mysqli->error);
                $x++;
        }
    }


 
   
   

    }
    mysqli_free_result($result);
    }


    ?>