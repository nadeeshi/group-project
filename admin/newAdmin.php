<!DOCTYPE>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Insert form</title>


</head>

<body>

<div class="display">

    <form action="insertAdmin.php" method="post" name="insertform">
        <p>
            <label for="name" id="preinput"> USER NAME : </label>
            <input type="text" name="username" required placeholder="Enter admin name" id="inputid"/>
        </p>
        <p>
            <label  for="email" id="preinput"> EMAIL ID : </label>
            <input type="email" name="usermail" required placeholder="Enter Email" id="inputid" />
        </p>
        <p>
            <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
            <input type="text" name="usermobile" required placeholder="Enter mobile number" id="inputid" />
        </p>
        <p>
            <label  for="password" id="preinput"> PASSWORD : </label>
            <input type="password" name="password" required placeholder="Enter password" id="inputid" />
        </p>



        <p>
            <input type="submit" name="send" value="Submit" id="inputid1"  />
        </p>
    </form>

</div>



</body>
</html>