// search null field in column and insert courses

$nul="SELECT id, roomnumber
FROM sunday
WHERE B IS NULL";
if( $r= mysqli_query($mysqli,$nul)){
while($ro=mysqli_fetch_assoc($r)){
echo $ro["id"];
echo " ";
echo $ro["roomnumber"]."</br>";
$m=$ro['id'];

$n=87;
$inse=$mysqli->query("UPDATE sunday SET B=$n WHERE id=$m") or die($mysqli->error);
//$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );


}
mysqli_free_result($r);
}

//course code search
$query="SELECT course_code from teachers_course_table";

if( $result= mysqli_query($mysqli,$query)){
while($row=mysqli_fetch_assoc($result)){
echo $row["course_code"]."</br>";
}
mysqli_free_result($result);
}

//teacher's routine chack
$s="saturday";
$t="SELECT *
FROM asad
WHERE $s IS NULL";
if( $r= mysqli_query($mysqli,$t)){
while($ro=mysqli_fetch_assoc($r)){
echo $ro["id"];
echo " ";
echo $ro["time"]."</br>";
// $m=$ro['id'];

// $n=87;
//$inse=$mysqli->query("UPDATE sunday SET B=$n WHERE id=$m") or die($mysqli->error);
//$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );


}
mysqli_free_result($r);
}


//testing count
// chack the duplicate value in a table of colamn
$q="SELECT name,location
FROM location
WHERE name='asad' OR location='asad'";
$y=0;

if( $re= mysqli_query($mysqli,$q)){
while($r=mysqli_fetch_assoc($re)){
$y++;
}
mysqli_free_result($re);
}
echo "</br>";
echo $y;




//duplicate course search

/*if($courseco!=0 || $courseco!=NULL)
{
$q="SELECT roomnumber,A
FROM saturday
WHERE roomnumber=$courseco OR A=$courseco";
$y=0;

if( $re= mysqli_query($mysqli,$q)){
while($r=mysqli_fetch_assoc($re)){
$y++;
}
mysqli_free_result($re);
}
echo "</br>";
echo $y;

}
else{

}*/
//printing the coursecode
//echo $courseco;
//echo "</br>";



//teacher routine checker function
function teacher_routine_check($name)
{
$mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
$s="saturday";
echo "hi";
echo "</br>";


$t="SELECT *
FROM $name
WHERE $s IS NULL";
if( $r= mysqli_query($mysqli,$t)){
while($ro=mysqli_fetch_assoc($r)){
echo $ro["id"];
echo " ";
echo $ro["time"]."</br>";
$id = $ro['id'];
$ti = $ro['time'];
return $ti;
}
mysqli_free_result($r);
}
}


//successfully one element inserted by the below <code>
    //course code search
    $query="SELECT * from teachers_course_table";

    if( $result= mysqli_query($mysqli,$query)){
    while($row=mysqli_fetch_assoc($result)){

    //echo $row["course_code"]."</br>";
    $courseco=$row["course_code"];
    $courseid=$row['id'];


    //echo $courseco;
    //echo "</br>";
    $name="asad";
    $le=teacher_routine_check($name,$courseco);

    echo "</br>";
    break;

    }
    mysqli_free_result($result);
    }





    function teacher_routine_check($name,$courseco)
    {
    $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
    $s="saturday";
    echo "hi";
    echo "</br>";


    $t="SELECT *
    FROM $name
    WHERE $s IS NULL";
    if( $r= mysqli_query($mysqli,$t)){
    while($ro=mysqli_fetch_assoc($r)){
    $id = $ro['id'];
    $ti = $ro['time'];


    $nul="SELECT *
    FROM $s
    WHERE $ti IS NULL";
    if( $rm= mysqli_query($mysqli,$nul)){
    while($row=mysqli_fetch_assoc($rm)){

    $mo=$row['id'];

    $inse=$mysqli->query("UPDATE $s SET $ti='$courseco' WHERE id=$mo") or die($mysqli->error);
    $inse=$mysqli->query("UPDATE $name SET $s='$courseco' WHERE id=$id") or die($mysqli->error);
    //$query = sprintf("UPDATE sunday SET B='$n' WHERE sunday.id='$s' ", $ro['id'] );
    break;

    }
    mysqli_free_result($rm);
    }
    break;

    }
    mysqli_free_result($r);

    }
    }



    //find the null from allteacherdata table
    $que="SELECT * from allteacher where t_name ='$tname' AND saturday IS NULL";
    $r= mysqli_query($mysqli,$que);
    if($r -> num_rows > 0){
    while($ro=mysqli_fetch_assoc($r)){
    $id = $ro['id'];
    $ti = $ro['time'];
    $tn = $ro['t_name'];
    echo $id;
    echo " ";
    echo $ti;
    echo " ";
    echo $tn;
    echo "</br>";
    }

    }