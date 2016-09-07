<!DOCTYPE html>
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
                <h1 class="page-head-line" style="color: #500a6f">Researchers Details</h1>
                <h1 class="page-subhead-line">All Member Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Researchers</h4>
                        <div style="margin-top: 20px;">

                    <!--add new Researcher-------------------------------------------------------->
                            <div class="display">

                                <form action="insertResearchers.php" method="post" name="insertform">
                                    <p>
                                        <label for="name" id="preinput"> RESEARCHER NAME : </label><br>
                                        <input type="text" name="username" required placeholder="Enter your name" id="inputid"/>
                                    </p>
                                    <p>
                                        <label  for="email" id="preinput"> EMAIL ID : </label><br>
                                        <input type="email" name="usermail" required placeholder="Enter your Email" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="mobile" id="preinput"> MOBILE NUMBER : </label><br>
                                        <input type="text" name="usermobile" required placeholder="Enter your mobile number" id="inputid" />
                                    </p>
                                    <p>
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </p>
                                </form>

                            </div>
                   <!---close add new Researcher--------------------------------------------------------->




                        </div>
                    </div>









                </div>
            </div>


            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of Researchers
                    </div>

                    <div class="panel-body">

                        <!-----view Researchers details------------------------------------------>

                        <?php
                        include('connect.php');
                        $select=mysql_query("SELECT * FROM researcher_details order by id desc");
                        $i=1;
                        while($userrow=mysql_fetch_array($select))
                        {
                            $id=$userrow['id'];
                            $username=$userrow['username'];
                            $usermail=$userrow['emailid'];
                            $usermobile=$userrow['mobileno'];
                            $created=$userrow['created']
                            ?>

                            <div class="display">
                                <p> RESEARCHER NAME : <span><?php echo $username; ?></span>
                                    <a href="deleteResearchers.php?id=<?php echo $id; ?>"
                                       onclick="return confirm('Are you sure you wish to delete this Record?');">
                                        <span class="delete" title="Delete"> X </span></a>
                                </p>
                                <br />
                                <p> EMAIL ID : <span><?php echo $usermail; ?></span>
                                    <a href="editResearchers.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
                                </p>
                                <br />
                                <p> MOBILE NO : <span><?php echo $usermobile; ?></span>
                                </p>
                                <br />
                                <p> CREATED ON : <span><?php echo $created; ?></span>
                                </p>
                                <br />
                            </div>
                        <?php } ?>

                        <!---close new researcher------------------------------------------------------>

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
