<?php
$output=NULL;
if(isset ($_POST['submit'])){
    $mysqli = new mysqli('localhost','root','','testproject')or die(mysqli_error($mysqli));
    $tname=$_POST['tname'];
    $offday1=$_POST['offday1'];
    $offday2=$_POST['offday2'];
    $r1day=$_POST['r1day'];
    $r1time=$_POST['A'];
    $r2day=$_POST['r2day'];
    $r2time=$_POST['B'];
    //echo $tname." ".$offday1." ".$offday2." ".$r1day." ".$r2day;

    $i=0;
    $va="";
    $val="";
    foreach($r1time AS $value){
        if($value=="m4"){
           
        }
        else{
            $i++;
         $va.=$value;
        }
      // echo $va."<br/>";
    }
    
    //echo $va;
    $j=0;
    foreach($r2time AS $value){
       if($value=="m6"){
        
       }
       else{
           $j++;
        $val.=$value;
       }
        
      // echo $va."<br/>";
    }
    if($offday1=="m1"){
        $offday1="Nullable";
    }
    if($offday2=="m2"){
        $offday2="Nullable";
    }
    if($r1day=="m3"){
        $r1day="Nullable";
    }
    if($r2day=="m5"){
        $r2day="Nullable";
    }
    if($i==0){
        $va="Nullable";
       // echo "va null";
    }
    if($j==0){
        $val="Nullable";
       // echo "val null";
    }

    //echo $val;
    //echo $tname." ".$offday1." ".$offday2." ".$r1day." ".$r2day." ".$va." ".$val;
  
    

     $mysqli->query("INSERT INTO requirement_table(t_name,offday1,offday2,r1day,r1time,r2day,r2time)VALUES('$tname','$offday1','$offday2',' $r1day','$va','$r2day','$val')") or die($mysqli->error);
        
    
    $mysqli->close();
}

?>
<html>

<head>

    <style type="text/css">
        body {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
            background-color: whitesmoke;

        }

        .r {
            margin-top: 30px;
        }

        .day {
            margin-left: 186px;
            margin-top: 29px;
            height: 100px;


        }

        .day1 {
            float: left;
            margin-right: 51px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            background: gray;
        }

        .day2 {
            float: left;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 20px;
            background: gray;
        }

        .ch {
            margin-left: 197px;
        }

        .c {
            margin-left: 308px;
        }

        .s {
            margin-left: 336px;
        }

        .c1 {
            margin-left: 275px;
            margin-top: 17px;
        }

        .c2 {
            margin-left: 333px;
            margin-top: 5px;
        }

        .add {
            margin-left: 584px;
        }

        .ad {
            margin-left: 395px;
        }

        .bo {
            background: white;
            color: white;
        }
    </style>
</head>

<body>
    <!--start new one form -->
    <div id="container" style="margin-right: 20%; margin-left:20%">
        <form action="#" method="POST">
            <center>

                <div class="r">
                    <h4><label class="control-label " for="tname">Select Teacher Name</label></h4>
                    <select name="tname" class="form-control" required>
                        <option value="" selected disabled="">--Select Teacher Name--</option>
                        <option value="Null">Null</option>
                        <?php
                            require_once 'process.php';
                            $querys = "SELECT * FROM teacher_info";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $tname=$row["initial_name"];
                                    echo"<option>$tname<br></option>";
                                }
                            }	
                        ?>
                    </select>
                </div>
            </center>

            <div class="day">
                <div class="day1">
                    <label class=" " for="offday1">
                        <h4>Select First Offday</h4>
                    </label>
                    <select name="offday1" class="">
                        <option value="0" selected disabled="">--Select First Offday--</option>
                        <option value="m1" selected>--Select First Offday--</option>
                        <?php
                            require_once 'process.php';
                            $querys = "SELECT * FROM day";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $day1=$row["day"];
                                    echo"<option>$day1<br></option>";
                                }
                            }	
                        ?>
                    </select>
                </div>
                <div class="day2">
                    <label class="control-label " for="offday2">
                        <h4>Select Second Offday</h4>
                    </label>
                    <select name="offday2" class="">
                        <option value="0" selected disabled="" selected>--Select Second Offday--</option>
                        <option value="m2" selected>--Select Second Offday--</option>
                        <?php
                            require_once 'process.php';
                            $querys = "SELECT * FROM day";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $day2=$row["day"];
                                    echo"<option>$day2<br></option>";
                                }
                            }	
                        ?>
                    </select>

                </div>
            </div>
            <div class="i"></div>
            <div id="container">
                <div class="re">
                    <label class="control-label " for="">
                        <h2 class="ch">Choice Your Exception Day and Time</h2>
                        <label class="control-label " for="offday2">
                            <h4 class="c">Choice Your Exception Day</h4>
                        </label>
                        <select name="r1day" class="s" id="excep">
                            <option value="Null" selected disabled="" selected>--Select Exception Day--</option>
                            <option value="m3" selected>--Select Exception Day--</option>
                            <?php
                            require_once 'process.php';
                            $querys = "SELECT * FROM day";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $day2=$row["day"];
                                    echo"<option>$day2<br></option>";
                                }
                            }	
                        ?>
                        </select>

                </div>
                <div id="container" class="c1">
                    <input type="checkbox" name="A[]" value="A" />8.30-10.00
                    <input type="checkbox" name="A[]" value="B" />10.00-11.30
                    <input type="checkbox" name="A[]" value="C" />11.30-1.00

                </div>
                <div id="container" class="c2">
                    <input type="checkbox" name="A[]" value="D" />1.00-2.30
                    <input type="checkbox" name="A[]" value="E" />2.30-4.00
                    <input type="checkbox" name="A[]" value="m4" checked class="bo" />
                </div>
                <div class="re">
                    <label class="control-label " for="">
                        <label class="control-label " for="offday2">
                            <h4 class="c">Choice Your Another Exception Day</h4>
                        </label>
                        <select name="r2day" class="s" id="excep">
                            <option value="Null" selected disabled="" selected>--Select Exception Day--</option>
                            <option value="m5" selected>--Select Exception Day--</option>
                            <?php
                            require_once 'process.php';
                            $querys = "SELECT * FROM day";
                            $results = mysqli_query($mysqli,$querys);
                            if ($results) 
                            {
                                while($row=mysqli_fetch_array($results))
                                {
                                    $day2=$row["day"];
                                    echo"<option>$day2<br></option>";
                                }
                            }	
                        ?>
                        </select>

                </div>
                <div id="container" class="c1">
                    <input type="checkbox" name="B[]" value="A" />8.30-10.00
                    <input type="checkbox" name="B[]" value="B" />10.00-11.30
                    <input type="checkbox" name="B[]" value="C" />11.30-1.00

                </div>
                <div id="container" class="c2">
                    <input type="checkbox" name="B[]" value="D" />1.00-2.30
                    <input type="checkbox" name="B[]" value="E" />2.30-4.00
                    <input type="checkbox" name="B[]" value="m6" checked class="bo" />
                </div>
            </div>
            <input type="SUBMIT" name="submit" class="ad" />

        </form>
    </div>






</body>

</html>