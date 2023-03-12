<?php
include'connection.php';

$sname=$_GET['sname'];
$sclass=$_GET['sclass'];
$sroll=$_GET['sroll'];
$esm=$_GET['esm'];
$etm=$_GET['etm'];
$usm=$_GET['usm'];
$utm=$_GET['utm'];
$msm=$_GET['msm'];
$mtm=$_GET['mtm'];
$psm=$_GET['psm'];
$ptm=$_GET['ptm'];
$bcsm=$_GET['bcsm'];
$bctm=$_GET['bctm'];
$csm=$_GET['csm'];
$ctm=$_GET['ctm'];
$ism=$_GET['ism'];
$itm=$_GET['itm'];
$psm=$_GET['psm'];
$ptm=$_GET['ptm'];
$tmarks=$_GET['tmarks'];
$smarks=$_GET['smarks'];
$marksprnct=$_GET['marksprnct'];
$freslt=$_GET['freslt'];
$sgrade=$_GET['sgrade'];



if($sname!=""&&$sclass!=""&&$sroll!=""&&$esm!=""&&$etm!=""&&$usm!=""&&$utm!=""&&$msm!=""&&$mtm!=""&&$psm!=""&&$ptm!=""&&$bcsm!=""&&$bctm!=""&&$csm!=""&&$ctm!=""&&$ism!=""&&$itm!=""&&$psm!=""&&$ptm!=""&&$tmarks!=""&&$smarks!=""&&$marksprnct!=""&&$freslt!=""&&$sgrade!=""){
    $sql="INSERT INTO result_tbl(Student_Name,student_class,Student_Roll_No,marks_english,tmarks_eng,marks_urdu,tmarks_urdu,marks_math,tmarks_math,marks_physics,tmarks_physics,marks_bio_com,tmarks_bio_com,marks_chem,tmarks_chem,marks_isl,tmarks_isl,marks_pst,tmarks_pst,total_marks,marks_secured,percentage,final_result,grade)
    VALUE('$sname','$sclass','$sroll','$esm','$etm','$usm','$utm','$msm','$mtm','$psm','$ptm','$bcsm','$bctm','$csm','$ctm','$ism','$itm','$psm','$ptm','$tmarks','$smarks','$marksprnct','$freslt','$sgrade')";
    
    $row=mysqli_query($conn,$sql);
    if($row){
        // header("location:login_as_tchr.php");
echo"Marks Submitted";
header('location:show_std_db.php');
    }
    else{
        echo "Error Dhund....!";
    }
}
else{
    echo"Fill All Fields";
}
?>