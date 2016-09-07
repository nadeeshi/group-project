<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Bat Facts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />


    <link href="css//navbar1n2.css" rel="stylesheet">

    <script src="js//jquary.js"></script>
    <script src="js//bootstrapjs.js"></script>


    <link href="css//newAccount.css" rel="stylesheet">
    <script src="js//newAccount.js"></script>

</head>



<body onload="document.registration.userid.focus();">





<!--get header Frame -->

<div class="row">

    <nav class="navbar navbar-default navbar1 navbar-li">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>BatFacts.Com</b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form  navbar-right">
                    <div class="form-group">
                        <input type="text"  style="height: 40px;" class="form-control" placeholder="Enter name here">
                    </div>

                    <button type="submit" style="width: 80px; height: 40px;" class="btn btn-default">Search</button>

                </form>


            </div>
</div>

 </nav>
    </div>








<div class="row">

    <?php include ("navbar2.php")?>

</div>


<div class="row">
    <img src="img/template.jpg" style="width:920px; height:278px; float: left;margin-bottom: 20px; margin-left: 180px;">
</div>



<h1>Registration Form</h1>
<p>Use tab keys to move from one input field to the next.</p>


<form name='registration' onSubmit="return formValidation();">
    <ul>

        <li><label for="fullName">* Full Name:</label></li>
        <li><input type="text" name="fullName" size="80" /></li>


        <li><label for="username">* User Name:</label></li>
        <li><input type="text" name="username" size="80" /></li>

        <li><label for="address">Address:</label></li>
        <li><input type="text" name="address" size="50" /></li>

        <li><label for="country">* Country:</label></li>
        <li><select name="country">
                <option selected="" value="Default">(Please select a country)</option>
                <option value="AF">Sri Lanka</option>
                <option value="AL">Canada</option>
                <option value="DZ">India</option>
                <option value="AS">Russia</option>
                <option value="AD">USA</option>
            </select>
        </li>



        <li><label for="email">* Email:</label></li>
        <li><input type="text" name="email" size="50" /></li>

        <li><label id="gender">* Sex:</label></li>
        <li><input type="radio" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="sex" value="Male" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Male</span></li>
        <li><input type="radio" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="sex" value="Female" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Female</span></li>

        <li><label> * Language:</label></li>
        <li><input type="checkbox" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="en" value="en" checked /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">English</span></li>
        <li><input type="checkbox" style=" float: left;margin-bottom: 20px;width: 250px;height:25px;" name="nonen" value="noen" /><span style=" float: left;margin-bottom: 20px;width: 250px;height:25px;">Non English</span></li>

        <li><label for="desc">About:</label></li>
        <li><textarea name="desc" id="desc"></textarea></li>


        <li><input type="submit" style=" float: left;width: 150px;height:35px; clear: left; margin: 20px 0 20px 230px;" name="submit" value="Submit" /></li>
    </ul>



</form>





<!--get footer -->
<?php include ("footer.php")?>



</body>
</html>