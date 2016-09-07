<?php
ob_start();
include("connect.php");

if(isset($_POST['send'])!="")
{
    $researchName=mysql_real_escape_string($_POST['researchName']);
    $assessmentNames=mysql_real_escape_string($_POST['assessmentNames']);
    $batTaxonomy=mysql_real_escape_string($_POST['batTaxonomy']);



    $update=mysql_query("INSERT INTO research_details(researchName,assessmentNames,batTaxonomy,created)VALUES
           ('$researchName','$assessmentNames','$batTaxonomy',now())");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:adminDetails.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
}
ob_end_flush();
?>