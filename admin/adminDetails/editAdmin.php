<?php
ob_start();
include('connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {
        $eusername=$_POST['eusername'];
        $eusermail=$_POST['eusermail'];
        $emobile=$_POST['eusermobile'];
        $password=$_POST['password'];

        $updated=mysql_query("UPDATE admin_details SET
        username='$eusername', emailid='$eusermail', mobileno='$emobile'  ,password='$password' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:adminDetails.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

</head>

<body>
<?php include("template.php")?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Admin Details</h1>
                <h1 class="page-subhead-line">All administrators details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #ff0084">Update admin details</h4>
                        <div style="margin-top: 20px;">
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $getselect=mysql_query("SELECT * FROM admin_details WHERE id='$id'");
    while($profile=mysql_fetch_array($getselect))
    {
        $username=$profile['username'];
        $usermail=$profile['emailid'];
        $usermobile=$profile['mobileno'];
        $password=$profile['password'];

        ?>
        <div class="display">
            <form action="" method="post" name="insertform">
                <p>
                    <label for="name"  id="preinput"> USER NAME : </label>
                    <input type="text" name="eusername" required placeholder="Enter  name"
                           value="<?php echo $username; ?>" id="inputid" />
                </p>
                <p>
                    <label  for="email"  id="preinput"> EMAIL ID : </label>
                    <input type="email" name="eusermail" required placeholder="Enter  Email"
                           value="<?php echo $usermail; ?>" id="inputid" />
                </p>
                <p>
                    <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
                    <input type="text" name="eusermobile" required placeholder="Enter  mobile number"
                           value="<?php echo $usermobile; ?>" id="inputid" />
                </p>
                <p>
                    <label  for="password"  id="preinput"> PASSWORD : </label>
                    <input type="password" name="password" required placeholder="Enter password"
                           value="<?php echo $password; ?>" id="inputid" />
                </p>




                <p>
                    <input type="submit" name="update" value="Update" id="inputid1" />
                </p>
            </form>
        </div>
    <?php } } ?>
                        </div>
                    </div>









                </div>
            </div>
        </div>



    </div>
</div>




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>






</body>
</html>